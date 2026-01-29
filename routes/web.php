<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\SocialiteController;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/api/kabupaten/{provinsi}', [DashboardController::class, 'kabupaten']);
    Route::get('/api/kecamatan/{kabupaten}', [DashboardController::class, 'kecamatan']);
    Route::get('/api/desa/{kecamatan}', [DashboardController::class, 'desa']);
});

Route::get('/auth/google/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('google.callback');

require __DIR__.'/auth.php';
