<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function create(Course $course)
    {
        return view('modules.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'doc_source' => ['required', 'in:linux,bsd,custom'],
            'doc_path' => ['nullable', 'string', 'max:255'],
        ]);

        $validated['course_id'] = $course->id;
        $validated['order'] = ($course->modules()->max('order') ?? 0) + 1;

        Module::create($validated);

        return redirect()->route('courses.show', $course)->with('status', 'Module created.');
    }
}

