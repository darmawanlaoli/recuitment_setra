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

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/profile/edit/{id}', [DashboardController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update/{id}', [DashboardController::class, 'updateProfile'])->name('profile.update');

    Route::get('/answer_question/{id}', [DashboardController::class, 'answerQuestion'])->name('answer_question');
    Route::post('/store_answer/{id}', [DashboardController::class, 'storeAnswer'])->name('store_answer');

    Route::post('/lamaran/store', [DashboardController::class, 'storeLamaran'])->name('lamaran.store');
});

Route::get('/auth/google/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('google.callback');

require __DIR__.'/auth.php';
