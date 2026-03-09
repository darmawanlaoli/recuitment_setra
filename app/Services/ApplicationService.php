<?php

namespace App\Services;

use App\Models\Applicants;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicationService
{
    protected array $fileFields = [
        'file_ktp',
        'file_kk',
        'file_sim',
        'file_npwp',
        'file_rekening',
        'file_ijazah',
        'file_transkrip',
        'file_paklaring',
        'file_skck',
    ];

    public function update($request, $id): Applicants
    {
        $user = Auth::user();

        // Ambil data berdasarkan user login
        $application = Applicants::where('id', $id)->firstOrFail();

        $data = $request->validated();

        // Pastikan tetap sinkron dengan data login
        $data['id_user'] = $user->id;

        // dd($data);

        // Handle file replacement
        foreach ($this->fileFields as $field) {

            if ($request->hasFile($field)) {

                // Hapus file lama jika ada
                if ($application->$field && Storage::disk('public')->exists($application->$field)) {
                    Storage::disk('public')->delete($application->$field);
                }

                // Simpan file baru
                $data[$field] = $request->file($field)
                    ->store('applications/' . $field, 'public');
            }
        }

        $application->update($data);

        return $application;
    }
}
