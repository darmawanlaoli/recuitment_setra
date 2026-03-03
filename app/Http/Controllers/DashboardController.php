<?php

namespace App\Http\Controllers;
use App\Models\Application;
use App\Models\RecruitmentQuestion;
use App\Models\RecruitmentAnswer;
use App\Services\Hrms\AreaService;
use App\Services\Hrms\JabatanService;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreApplicationRequest;
use App\Services\ApplicationService;


class DashboardController extends Controller
{

    public function index(
        AreaService $areaService,
        JabatanService $jabatanService,
    )
    {

        $areas = $areaService->all();
        $jabatans = $jabatanService->all();

        // Ambil provinsi
        $response = Http::get('https://api.datawilayah.com/api/provinsi.json');
        $provinsi = $response->json()['data'] ?? [];
        $applications = Application::where('id_user', Auth::id())->first();

        if ($applications && $applications->isProfileComplete()) {
            $is_profile_completed = true;
        } else {
            $is_profile_completed = false;
        }

        $sidebar = true;

        return view('dashboard', compact('provinsi', 'areas', 'jabatans', 'applications', 'is_profile_completed', 'sidebar'));
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
        // return view('dashboard', [
        //     'user' => $request->user(),
        //     'applications' => Application::where('id_user', Auth::id())->first()
        // ]);

        $user = $request->user();
        $applications = Application::where('id_user', Auth::id())->first();

        return view('dashboard', compact('user', 'applications'));
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
            'name' => $request->nama_lengkap,
            'provinsi' => $provinsiNama,
            'kabupaten' => $kabupatenNama,
            'area' => $request->area,
            'posisi' => $request->posisi,
            'status' => 'pending',
        ]);

        return Redirect::route('dashboard')->with('success', 'Lamaran berhasil diajukan, silahkan cek status pengajuan Anda secara berkala!');
    }

    public function editProfile($id)
    {
        $applications = Application::findOrFail($id);
        if ($applications && $applications->isProfileComplete()) {
            $is_profile_completed = true;
        } else {
            $is_profile_completed = false;
        }

        $sidebar = true;
        return view('edit_profile', compact('applications', 'sidebar', 'is_profile_completed'));
    }

    public function updateProfile(
        StoreApplicationRequest $request,
        ApplicationService $service,
        $id
    ) {
        $service->update($request, $id);

        return Redirect::route('dashboard')->with('success', 'Data diri berhasil tersimpan.');
    }

    public function answerQuestion($applicationId): View
    {

        // $questions = RecruitmentQuestion::where('is_active', true)
        // ->orderBy('sort_order')
        // ->get();

        $questions = RecruitmentQuestion::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $answers = RecruitmentAnswer::where('application_id', $applicationId)
            ->get()
            ->keyBy('question_id');

        $sidebar = false;

        return view('answer_question', compact(
            'questions',
            'answers',
            'applicationId',
            'sidebar'
        ));
    }

    public function storeAnswer(Request $request, $applicationId)
    {
        $questions = RecruitmentQuestion::where('is_active', true)->get();

        $rules = [];

        foreach ($questions as $question) {

            if ($question->is_required) {
                $rules["answers.{$question->id}.value"] = 'required|in:YA,TIDAK';
            } else {
                $rules["answers.{$question->id}.value"] = 'nullable|in:YA,TIDAK';
            }

            if ($question->question_type === 'yes_no_with_explanation') {
                $rules["answers.{$question->id}.explanation"] = 'nullable|string';
            }
        }

        $validated = $request->validate($rules);

        foreach ($questions as $question) {

            $answerValue = $validated['answers'][$question->id]['value'] ?? null;
            $explanation = $validated['answers'][$question->id]['explanation'] ?? null;

            // Jangan simpan jika benar-benar kosong
            if (!$answerValue && !$explanation) {
                continue;
            }

            RecruitmentAnswer::updateOrCreate(
                [
                    'application_id' => $applicationId,
                    'question_id' => $question->id
                ],
                [
                    'answer_value' => $answerValue,
                    'explanation' => $explanation
                ]
            );
        }

        return Redirect::route('dashboard')->with('success', 'Jawaban berhasil disimpan.');
    }

}
