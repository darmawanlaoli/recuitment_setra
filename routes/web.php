<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\SocialiteController;

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/email/verify', function () {
    return view('auth.verify-email', [
        'user' => request()->user()
    ]);
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/get_regencies/{id}', [DashboardController::class, 'regencies'])->name('get_regencies');
    Route::get('/get_area/{id}', [DashboardController::class, 'getArea'])->name('get_area');
    Route::get('/get_posisi/{id}', [DashboardController::class, 'posisi'])->name('get_posisi');


    Route::get('/api/kabupaten/{provinsi}', [DashboardController::class, 'kabupaten']);
    Route::get('/api/kecamatan/{kabupaten}', [DashboardController::class, 'kecamatan']);
    Route::get('/api/desa/{kecamatan}', [DashboardController::class, 'desa']);

    Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
    Route::get('/profile/edit/{id}', [DashboardController::class, 'editProfile'])->name('profile.edit');
    Route::post('/profile/update/{id}', [DashboardController::class, 'updateProfile'])->name('profile.update');

    Route::get('/answer_question/{id}', [DashboardController::class, 'answerQuestion'])->name('answer_question');
    Route::post('/store_answer/{id}', [DashboardController::class, 'storeAnswer'])->name('store_answer');

    Route::post('/lamaran/store', [DashboardController::class, 'storeLamaran'])->name('lamaran.store');
    Route::get('/riwayat_pekerjaan/create/{id}', [DashboardController::class, 'createRiwayatPekerjaan'])->name('riwayat_pekerjaan.create');
    Route::post('/riwayat_pekerjaan/store', [DashboardController::class, 'storeRiwayatPekerjaan'])->name('riwayat_pekerjaan.store');

});

Route::get('/auth/google/redirect', [SocialiteController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('google.callback');

require __DIR__.'/auth.php';
