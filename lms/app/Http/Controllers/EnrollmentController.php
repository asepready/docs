<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    public function store(Course $course)
    {
        $user = Auth::user();

        Enrollment::firstOrCreate(
            ['user_id' => $user->id, 'course_id' => $course->id],
            ['status' => 'active', 'enrolled_at' => now()]
        );

        return redirect()->route('courses.show', $course)->with('status', 'Anda terdaftar pada course ini.');
    }
}

