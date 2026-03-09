<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\LessonProgress;
use App\Models\Module;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function create(Module $module)
    {
        return view('lessons.create', compact('module'));
    }

    public function store(Request $request, Module $module)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:text,file,link,video'],
            'content' => ['nullable', 'string'],
            'external_url' => ['nullable', 'url'],
        ]);

        $validated['module_id'] = $module->id;
        $validated['order'] = ($module->lessons()->max('order') ?? 0) + 1;

        $lesson = Lesson::create($validated);

        return redirect()->route('courses.show', $module->course)->with('status', 'Lesson created.');
    }

    public function markAsCompleted(Request $request, Lesson $lesson)
    {
        $user = $request->user();
        $enrollment = $user->enrollments()->where('course_id', $lesson->module->course_id)->firstOrFail();

        $progress = LessonProgress::firstOrCreate(
            ['enrollment_id' => $enrollment->id, 'lesson_id' => $lesson->id],
            ['status' => 'in_progress', 'started_at' => now()]
        );

        $progress->update([
            'status' => 'completed',
            'completed_at' => now(),
        ]);

        return back()->with('status', 'Lesson ditandai selesai.');
    }
}

