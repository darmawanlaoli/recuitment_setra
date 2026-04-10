<?php

namespace App\Http\Controllers;

use App\Models\Applicants;
use App\Models\RecruitmentQuestion;
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
use Illuminate\Support\Facades\DB;


class RecruitmentTestController extends Controller
{

    public function index(Request $request)
    {
        $user = $request->user();
        $applications = Applicants::where('id_user', Auth::id())->first();
        $test_types = RecruitmentTestType::where('is_active', 1)->get();

        $sidebar = false;
        if ($applications->is_test_active == 0) {
            return back()->with('success', 'Test masih belum diaktifkan, silahkan cek secara berkala');
        } else {
            return view('test', compact('sidebar', 'test_types', 'applications'));
        }
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

        return back()->with('success', 'Semua test sudah selesai, terima kasih telah mengikuti proses seleksi ini');
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
            return redirect()->route('test')
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

        $applicantId = Applicants::where('id_user', Auth::id())->first()->id;

        if ($session->status === 'finished') {
            return redirect()->route('test', $applicantId)
                ->with('success', 'Test sudah selesai');
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

        return redirect()->route('test', $applicantId)
            ->with('success', 'Test selesai');
    }

    public function finished()
    {
        return back()->with('success', 'Semua test sudah selesai, terima kasih telah mengikuti proses seleksi ini');
    }
}
