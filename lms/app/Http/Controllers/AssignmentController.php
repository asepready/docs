<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Module;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function create(Module $module)
    {
        return view('assignments.create', compact('module'));
    }

    public function store(Request $request, Module $module)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'due_at' => ['nullable', 'date'],
        ]);

        $validated['module_id'] = $module->id;

        Assignment::create($validated);

        return redirect()->route('courses.show', $module->course)->with('status', 'Assignment created.');
    }
}

