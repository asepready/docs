<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Course;
use App\Notifications\NewAnnouncement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements = Announcement::with(['course', 'author'])
            ->latest()
            ->paginate(20);

        return view('announcements.index', compact('announcements'));
    }

    public function create(Course $course)
    {
        return view('announcements.create', compact('course'));
    }

    public function store(Request $request, Course $course)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'body' => ['required', 'string'],
        ]);

        $announcement = Announcement::create([
            'course_id' => $course->id,
            'user_id' => Auth::id(),
            'title' => $validated['title'],
            'body' => $validated['body'],
        ]);

        foreach ($course->enrollments()->with('user')->get() as $enrollment) {
            $enrollment->user->notify(new NewAnnouncement($announcement));
        }

        return redirect()->route('announcements.index')->with('status', 'Pengumuman dikirim.');
    }
}

