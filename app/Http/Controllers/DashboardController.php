<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{

    public function index()
    {
        // Ambil provinsi
        $response = Http::get('https://api.datawilayah.com/api/provinsi.json');
        $provinsi = $response->json()['data'] ?? [];
        return view('dashboard', compact('provinsi'));
    }

    public function kabupaten($provinsi)
    {
        $response = Http::get("https://api.datawilayah.com/api/kabupaten_kota/{$provinsi}.json");
        return response()->json($response->json());
    }

    public function kecamatan($kabupaten)
    {
        $response = Http::get("https://api.datawilayah.com/api/kecamatan/{$kabupaten}.json");
        return response()->json($response->json());
    }

    public function desa($kecamatan)
    {
        $response = Http::get("https://api.datawilayah.com/api/desa_kelurahan/{$kecamatan}.json");
        return response()->json($response->json());
    }


    public function edit(Request $request): View
    {
        return view('dashboard', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
