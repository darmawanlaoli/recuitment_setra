<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function index($area)
    {
        $area = urldecode($area);

        $query = Application::query();

        if (!empty($area)) {
            $query->where('area', $area);
        }

        return response()->json([
            'data' => $query->get()
        ]);
    }

    public function show($id)
    {
        $candidate = Application::findOrFail($id);
        return response()->json(['data' => $candidate]);
    }

    public function update(Request $request, $id)
    {
        $candidate = Application::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
            'approved_by' => 'required',
        ]);

        $candidate->update($request->only(['status','remark', 'approved_by', 'approved_at', 'remark', 'tanggal_interview']));
        return response()->json([
            'message' => 'Candidate updated successfully',
            'data' => $candidate
        ]);
    }
}
