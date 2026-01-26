<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            // Gunakan stateless untuk menghindari InvalidStateException
            $googleUser = Socialite::driver('google')->stateless()->user();

            // Mencari user berdasarkan email (Kunci Utama)
            // Ini mencegah Duplicate Entry karena email adalah identitas unik
            $user = User::where('email', $googleUser->email)->first();

            if ($user) {
                // KONDISI 1: User sudah terdaftar (baik manual maupun google)
                // Kita update google_id-nya untuk memastikan akun terhubung (Link Account)
                $user->update([
                    'google_id' => $googleUser->id,
                    'avatar'    => $googleUser->avatar, // Sinkronkan foto terbaru
                ]);
            } else {
                // KONDISI 2: User baru pertama kali daftar
                $user = User::create([
                    'name'              => $googleUser->name,
                    'email'             => $googleUser->email,
                    'google_id'         => $googleUser->id,
                    'avatar'            => $googleUser->avatar,
                    'email_verified_at' => now(), // User Google dianggap sudah terverifikasi
                    'password'          => Hash::make(Str::random(24)), // Password acak yang kuat
                ]);
            }

            Auth::login($user);

            // Gunakan intended() agar user kembali ke halaman yang mereka tuju sebelumnya
            return redirect()->intended('/dashboard');

        } catch (Exception $e) {
            // Log error untuk kebutuhan debugging internal
            \Log::error('Google Auth Error: ' . $e->getMessage());

            return redirect('/login')->with('error', 'Authentication failed. Please try again.');
        }
    }
}

?>
