<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Services\Hrms\AreaService;
use App\Services\Hrms\JabatanService;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;


class DashboardController extends Controller
{

    public function index(
        AreaService $areaService,
        JabatanService $jabatanService
    )
    {
        $areas = $areaService->all();
        $jabatans = $jabatanService->all();

        // Ambil provinsi
        $response = Http::get('https://api.datawilayah.com/api/provinsi.json');
        $provinsi = $response->json()['data'] ?? [];
        $applications = Application::where('id_user', Auth::id())->get();
        return view('dashboard', compact('provinsi', 'areas', 'jabatans', 'applications'));
    }

    public function profile()
    {
        $applicants = Application::with(['province', 'regency'])->get();

        return view('profile', compact('applicants'));
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

    public function storeLamaran(Request $request)
    {

        $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'area' => 'required',
            'posisi' => 'required',
        ]);

        // Ambil kode wilayah dari request
        $provinsiKode = $request->provinsi;
        $kabupatenKode = $request->kabupaten;

        // Ambil daftar provinsi dan kabupaten dari API atau service
        $provinsiList = Http::get('https://wilayah.id/api/provinces.json')->json()['data'] ?? [];
        $kabupatenList = Http::get("https://wilayah.id/api/regencies/{$provinsiKode}.json")->json()['data'] ?? [];

        // Cari nama berdasarkan kode
        $provinsiNama = collect($provinsiList)->firstWhere('code', $provinsiKode)['name'] ?? null;
        $kabupatenNama = collect($kabupatenList)->firstWhere('code', $kabupatenKode)['name'] ?? null;

        Application::create([
            'id_user' => Auth::id(),
            'provinsi' => $provinsiNama,
            'kabupaten' => $kabupatenNama,
            'area' => $request->area,
            'posisi' => $request->posisi,
            'status' => 'pending',
        ]);

        return redirect()->route('dashboard')->with('success', 'Lamaran berhasil diajukan, silahkan cek status pengajuan Anda secara berkala!');
    }
}
