<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\Province;
use App\Models\Regency;

class SyncWilayah extends Command
{
    protected $signature = 'sync:wilayah';
    protected $description = 'Sync provinces and regencies from API';


    public function handle(): int
{
    $this->info('=== START SYNC WILAYAH ===');

    $provincesUrl  = config('services.wilayah.provinces_url');
    $regenciesBase = config('services.wilayah.regencies_base_url');

    if (!$provincesUrl || !$regenciesBase) {
        $this->error('Wilayah API URL not configured.');
        return self::FAILURE;
    }

    try {

        DB::beginTransaction();

        // Optional: nonaktifkan semua dulu
        Province::query()->update(['is_active' => false]);
        Regency::query()->update(['is_active' => false]);

        /*
        |--------------------------------------------------------------------------
        | 1️⃣ FETCH PROVINCES
        |--------------------------------------------------------------------------
        */

        $provinceResponse = Http::timeout(30)->get($provincesUrl);

        if (!$provinceResponse->successful()) {
            throw new \Exception('Failed fetching provinces');
        }

        $provinceJson = $provinceResponse->json();

        if (!isset($provinceJson['data']) || !is_array($provinceJson['data'])) {
            throw new \Exception('Invalid provinces response structure');
        }

        foreach ($provinceJson['data'] as $provinceData) {

            if (!isset($provinceData['code'], $provinceData['name'])) {
                continue;
            }

            $provinceCode = (int) $provinceData['code'];

            $province = Province::updateOrCreate(
                ['id' => $provinceCode],
                [
                    'name'      => $provinceData['name'],
                    'is_active' => true,
                ]
            );

            /*
            |--------------------------------------------------------------------------
            | 2️⃣ FETCH REGENCIES PER PROVINCE
            |--------------------------------------------------------------------------
            */

            $regencyUrl = $regenciesBase . '/' . $provinceCode . '.json';

            $regencyResponse = Http::timeout(30)->get($regencyUrl);

            if (!$regencyResponse->successful()) {
                $this->warn("Failed regencies for province {$provinceCode}");
                continue;
            }

            // wilayah.id langsung return array
            $regencies = $regencyResponse->json();

            if (!is_array($regencies)) {
                continue;
            }

            foreach ($regencies as $regencyData) {

                if (!isset($regencyData['code'], $regencyData['name'])) {
                    continue;
                }

                Regency::updateOrCreate(
                    ['id' => (int) $regencyData['code']],
                    [
                        'province_id' => $province->id,
                        'name'        => $regencyData['name'],
                        'is_active'   => true,
                    ]
                );
            }

            $this->info("✓ Synced regencies for {$province->name}");
        }

        DB::commit();

        $this->info('=== SYNC COMPLETED SUCCESSFULLY ===');

        return self::SUCCESS;

    } catch (\Throwable $e) {

        DB::rollBack();

        $this->error('Error: ' . $e->getMessage());

        return self::FAILURE;
    }
}

}
