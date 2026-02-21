<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CandidateController;

// Route::middleware('auth.apikey')->group(function () {
//     Route::get('/candidates', [CandidateController::class, 'index']);
//     Route::get('/candidates/{id}', [CandidateController::class, 'show']);
//     Route::put('/candidates/{id}', [CandidateController::class, 'update']);
// });

Route::middleware([App\Http\Middleware\ApiKeyMiddleware::class])->group(function () {
    Route::get('/candidates', [CandidateController::class, 'index']);
    Route::get('/candidates/{id}', [CandidateController::class, 'show']);
    Route::put('/candidates/{id}', [CandidateController::class, 'update']);
});
