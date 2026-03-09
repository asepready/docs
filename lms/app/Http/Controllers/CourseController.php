<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        $query = Course::query()->with('owner')->where('is_active', true);

        if (Auth::user()?->isTeacher()) {
            $query->where('owner_id', Auth::id());
        }

        $courses = $query->orderBy('title')->paginate(15);

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => ['required', 'string', 'max:50', 'unique:courses,code'],
            'title' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        $validated['owner_id'] = Auth::id();

        Course::create($validated);

        return redirect()->route('courses.index')->with('status', 'Course created.');
    }

    public function show(Course $course)
    {
        $course->load('modules.lessons');

        return view('courses.show', compact('course'));
    }
}

