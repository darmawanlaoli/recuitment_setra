<?php

namespace App\Services\Hrms;

use Illuminate\Support\Facades\Http;

class BaseHrmsService
{
    protected function request($endpoint)
    {
        $response = Http::withHeaders([
            'X-API-KEY' => config('services.hrms.key')
        ])->get(config('services.hrms.url') . $endpoint);

        if ($response->failed()) {
            return [];
        }

        return $response->json()['data'] ?? [];
    }
}
