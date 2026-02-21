<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index()
    {
        return response()->json(['data' => Application::all()]);
    }

    public function show($id)
    {
        $candidate = Application::findOrFail($id);
        return response()->json(['data' => $candidate]);
    }

    public function update(Request $request, $id)
    {
        $candidate = Candidate::findOrFail($id);
        $candidate->update($request->only(['status', 'approved_by']));
        return response()->json([
            'message' => 'Candidate updated successfully',
            'data' => $candidate
        ]);
    }
}
