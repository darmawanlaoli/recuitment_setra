<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\RecruitmentTestAnswer;
use App\Models\RecruitmentTestSession;
use App\Models\RecruitmentTestQuestion;
use App\Models\RecruitmentTestOption;
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
use App\Models\Province;
use App\Models\Regency;
use App\Models\Area;
use App\Models\EmploymentHistory;
use App\Models\RecruitmentTestType;
use App\Services\ApplicationService;

use App\Models\RecruitmentInterviewQuestion;
use App\Models\RecruitmentInterviewAnswer;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;


class DashboardController extends Controller
{

    public function index(
        AreaService $areaService,
        JabatanService $jabatanService,
    ) {

        $areas = $areaService->all();
        $jabatans = $jabatanService->all();

        // Ambil provinsi
        // $response = Http::get('https://api.datawilayah.com/api/provinsi.json');
        // $provinsi = $response->json()['data'] ?? [];
        $provinsi = Province::get();
        $applications = Applicants::where('id_user', Auth::id())->first();

        if ($applications && $applications->isProfileComplete()) {
            $is_profile_completed = true;
        } else {
            $is_profile_completed = false;
        }

        $sidebar = true;

        return view('dashboard', compact('provinsi', 'areas', 'jabatans', 'applications', 'is_profile_completed', 'sidebar'));
    }

    public function createRiwayatPekerjaan($id_applicant)
    {

        $applicant = Applicants::where('id_user', Auth::id())->first();

        if ($applicant->id_user != Auth::id()) {
            return back()->with('status', 'Terjadi kesalahan, silahkan coba lagi');
        } else {
            $applications = DB::table('applicants')
                ->join('tb_provinces', 'applicants.provinsi', '=', 'tb_provinces.code')
                ->join('tb_regencies', 'applicants.kabupaten', '=', 'tb_regencies.code')
                ->join('tb_jabatan', 'applicants.posisi', '=', 'tb_jabatan.id')
                ->join('tb_area', 'applicants.area', '=', 'tb_area.id')
                ->select('applicants.*', 'tb_provinces.name as nama_provinsi', 'tb_regencies.name as nama_kabupaten', 'tb_jabatan.nama_jabatan', 'tb_area.nama_area')
                ->get();
            // dd($applications);
            $sidebar = false;

            return view('create_riwayat_pekerjaan', compact('applications', 'sidebar', 'id_applicant'));
        }
    }

    public function storeRiwayatPekerjaan(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'posisi' => 'required',
            'tanggal_gabung' => 'required',
            'tanggal_akhir' => 'required',
            'file_paklaring' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        $pathPaklaring = null;

        if ($request->hasFile('file_paklaring')) {

            $file = $request->file('file_paklaring');

            // buat nama file unik
            $filename = time() . '_' . $file->getClientOriginalName();

            // simpan ke folder public/paklaring
            $file->move(public_path('file_paklaring'), $filename);

            // path yang disimpan di database
            $pathPaklaring = 'file_paklaring/' . $filename;
        }

        EmploymentHistory::create([
            'id_applicant' => $request->id_applicant,
            'nama_perusahaan' => $request->nama_perusahaan,
            'posisi' => $request->posisi,
            'tanggal_gabung' => $request->tanggal_gabung,
            'tanggal_akhir' => $request->tanggal_akhir,
            'no_telepon_perusahaan' => $request->no_telepon_perusahaan,
            'file_paklaring' => $pathPaklaring,
        ]);

        return back()->with('status', 'Riwayat pekerjaan berhasil tersimpan');
    }

    public function profile()
    {
        $applications = DB::table('applicants')
            ->join('tb_provinces', 'applicants.provinsi', '=', 'tb_provinces.code')
            ->join('tb_regencies', 'applicants.kabupaten', '=', 'tb_regencies.code')
            ->join('tb_jabatan', 'applicants.posisi', '=', 'tb_jabatan.id')
            ->join('tb_area', 'applicants.area', '=', 'tb_area.id')
            ->select('applicants.*', 'tb_provinces.name as nama_provinsi', 'tb_regencies.name as nama_kabupaten', 'tb_jabatan.nama_jabatan', 'tb_area.nama_area')
            ->get();
        // dd($applications);
        $sidebar = false;
        return view('profile', compact('applications', 'sidebar'));
    }

    public function regencies($provinsi)
    {
        $response = Regency::where('province_code', $provinsi)->get();
        return response()->json(['data' => $response]);
    }

    public function getArea($kabupaten)
    {
        $response = Area::where('regency_code', $kabupaten)->get();
        return response()->json(['data' => $response]);
    }

    public function posisi($area_id)
    {
        $response = DB::table('tb_lowongan')
            ->join('tb_jabatan', 'tb_lowongan.jabatan_id', '=', 'tb_jabatan.id')
            ->select('tb_lowongan.*', 'tb_jabatan.nama_jabatan')
            ->where('area_id', $area_id)
            ->get();
        return response()->json(['data' => $response]);
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
        $user = $request->user();
        $applications = Applicants::where('id_user', Auth::id())->first();

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

    public function startTest()
    {
        $applicantId = Applicants::where('id_user', Auth::id())->first()->id;

        // Ambil semua test aktif berurutan
        $testTypes = \App\Models\RecruitmentTestType::where('is_active', 1)
            ->orderBy('sequence')
            ->get();

        foreach ($testTypes as $test) {

            $session = \App\Models\RecruitmentTestSession::where([
                'applicant_id' => $applicantId,
                'test_type_id' => $test->id
            ])->first();

            // Jika belum pernah → buat session
            if (!$session) {

                $session = \App\Models\RecruitmentTestSession::create([
                    'applicant_id' => $applicantId,
                    'test_type_id' => $test->id,
                    'start_time'   => now(),
                    'status'       => 'in_progress'
                ]);

                return redirect()->route('test.show', $session->id);
            }

            // Jika sedang dikerjakan → lanjutkan
            if ($session->status === 'in_progress') {
                return redirect()->route('test.show', $session->id);
            }

            // Jika sudah selesai → lanjut ke test berikutnya
        }

        return view('test.finished');
    }

    public function showTest($sessionId)
    {
        $session = \App\Models\RecruitmentTestSession::findOrFail($sessionId);

        $applicantId = Applicants::where('id_user', Auth::id())->first()->id;

        // 🔒 Pastikan session milik dia
        if ($session->applicant_id != $applicantId) {
            abort(403);
        }

        // 🔒 Jika sudah selesai → tidak boleh buka lagi
        if ($session->status === 'finished') {
            return redirect()->route('test.start')
                ->with('error', 'Test sudah selesai');
        }

        $questions = \App\Models\RecruitmentTestQuestion::with('options')
            ->where('test_type_id', $session->test_type_id)
            ->orderBy('order_number')
            ->get();

        $sidebar = false;

        return view('test.exam', compact('session', 'questions', 'sidebar'));
    }

    public function submitTest(Request $request, $sessionId)
    {
        $session = RecruitmentTestSession::findOrFail($sessionId);

        if ($session->status === 'finished') {
            return redirect()->route('test.start');
        }

        $totalScore = 0;

        foreach ($request->answers as $questionId => $answer) {

            $question = RecruitmentTestQuestion::find($questionId);

            $score = 0;
            $selectedOptionId = null;
            $answerText = null;

            if ($question->question_type === 'mcq') {

                $option = RecruitmentTestOption::find($answer);

                if ($option && $option->is_correct) {
                    $score = $question->weight;
                }

                $selectedOptionId = $option->id ?? null;
            } else {
                $answerText = $answer;
            }

            RecruitmentTestAnswer::create([
                'session_id' => $session->id,
                'question_id' => $questionId,
                'selected_option_id' => $selectedOptionId,
                'answer_text' => $answerText,
                'score' => $score
            ]);

            $totalScore += $score;
        }

        // 🔥 Ambil passing grade
        $testType = RecruitmentTestType::find($session->test_type_id);

        $status = ($totalScore >= $testType->passing_grade)
            ? 'passed'
            : 'failed';

        $session->update([
            'end_time' => now(),
            'status' => 'finished',
            'total_score' => $totalScore,
            'result_status' => $status
        ]);

        return redirect()->route('test.start')
            ->with('success', 'Test selesai');
    }

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
        if ($request->status_usia === 'TIDAK LULUS') {
            return back()->with('error', 'Maaf, Anda tidak memenuhi syarat usia untuk melamar. Usia minimal adalah 18 tahun dan maksimal 51 tahun.');
        }

        if ($request->status_berlaku_sim === 'TIDAK LULUS') {
            return back()->with('error', 'Maaf, usia SIM Anda tidak memenuhi syarat (kurang dari 1 tahun).');
        }

        $validated = $request->validate([
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'area' => 'required',
            'posisi' => 'required',
            'status_perkawinan' => 'required',
            'tanggal_lahir' => 'required|date',
            'file_sim_lama' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $fileSimPath = null;

        if ($request->hasFile('file_sim_lama')) {
            $fileSimPath = $request->file('file_sim_lama')->store(
                'applications/file_sim_lama/',
                'public'
            );
        }

        Applicants::create([
            'id_user' => Auth::id(),
            'provinsi' => $validated['provinsi'],
            'kabupaten' => $validated['kabupaten'],
            'area' => $validated['area'],
            'posisi' => $validated['posisi'],
            'name' => $request->nama_lengkap,
            'tanggal_lahir' => $validated['tanggal_lahir'],
            'status_perkawinan' => $validated['status_perkawinan'],
            'jenis_sim' => $request->jenis_sim,
            'jenis_sim_sebelumnya' => $request->jenis_sim_sebelumnya,
            'tanggal_berlaku_sim' => $request->tanggal_berlaku_sim,
            'file_sim_lama' => $fileSimPath,
            'status' => 'pending',
        ]);

        return Redirect::route('dashboard')
            ->with('success', 'Lamaran berhasil diajukan, silahkan cek status pengajuan Anda secara berkala!');
    }

    public function editProfile($id)
    {
        $applications = Applicants::findOrFail($id);
        if ($applications && $applications->isProfileComplete()) {
            $is_profile_completed = true;
        } else {
            $is_profile_completed = false;
        }

        $riwayat_pekerjaan = EmploymentHistory::where('id_applicant', $id)->get();

        $sidebar = true;
        return view('edit_profile', compact('applications', 'sidebar', 'is_profile_completed', 'riwayat_pekerjaan'));
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

        // $questions = RecruitmentTestQuestion::where('is_active', true)
        // ->orderBy('sort_order')
        // ->get();

        $questions = RecruitmentTestQuestion::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $answers = RecruitmentTestAnswer::where('application_id', $applicationId)
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
        $questions = RecruitmentTestQuestion::where('is_active', true)->get();

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

            RecruitmentTestAnswer::updateOrCreate(
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


    public function interview($applicationId)
    {
        $questions = RecruitmentInterviewQuestion::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        // dd($questions);

        $answers = RecruitmentInterviewAnswer::where('application_id', $applicationId)
            ->get()
            ->keyBy('question_id');

        $sidebar = false;

        return view('interview_questions', compact(
            'questions',
            'answers',
            'applicationId',
            'sidebar'
        ));
    }


    public function storeInterviewAnswer(Request $request, $applicationId)
    {
        $questions = RecruitmentInterviewQuestion::where('is_active', true)->get();

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

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('interview_error', 'Validasi gagal, periksa kembali jawaban Anda.');
        }

        $validated = $request->validate($rules);



        foreach ($questions as $question) {

            $answerValue = $validated['answers'][$question->id]['value'] ?? null;
            $explanation = $validated['answers'][$question->id]['explanation'] ?? null;

            // Jangan simpan jika benar-benar kosong
            if (!$answerValue && !$explanation) {
                continue;
            }

            RecruitmentInterviewAnswer::updateOrCreate(
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
