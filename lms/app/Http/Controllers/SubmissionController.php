<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
{
    public function create(Assignment $assignment)
    {
        return view('submissions.create', compact('assignment'));
    }

    public function store(Request $request, Assignment $assignment)
    {
        $validated = $request->validate([
            'content' => ['nullable', 'string'],
        ]);

        Submission::updateOrCreate(
            ['assignment_id' => $assignment->id, 'user_id' => Auth::id()],
            array_merge($validated, ['submitted_at' => now()])
        );

        return back()->with('status', 'Tugas terkirim.');
    }
}

