<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create(Module $module)
    {
        return view('quizzes.create', compact('module'));
    }

    public function store(Request $request, Module $module)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'time_limit_minutes' => ['nullable', 'integer', 'min:1'],
        ]);

        $validated['module_id'] = $module->id;

        Quiz::create($validated);

        return redirect()->route('courses.show', $module->course)->with('status', 'Quiz created.');
    }
}

