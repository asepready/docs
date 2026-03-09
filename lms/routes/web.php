<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\QuizAttemptController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\SubmissionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/admin', function () {
        return view('dashboards.admin');
    })->middleware('role:admin')->name('dashboard.admin');

    Route::get('/dashboard/teacher', function () {
        return view('dashboards.teacher');
    })->middleware('role:teacher')->name('dashboard.teacher');

    Route::get('/dashboard/student', function () {
        return view('dashboards.student');
    })->middleware('role:student')->name('dashboard.student');

    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('announcements.index');

    Route::middleware('role:student')->group(function () {
        Route::post('courses/{course}/enroll', [EnrollmentController::class, 'store'])->name('courses.enroll');
        Route::get('assignments/{assignment}/submit', [SubmissionController::class, 'create'])->name('assignments.submit');
        Route::post('assignments/{assignment}/submit', [SubmissionController::class, 'store'])->name('assignments.submit.store');
        Route::post('quizzes/{quiz}/attempt', [QuizAttemptController::class, 'store'])->name('quizzes.attempt');
    });

    Route::middleware('role:teacher,admin')->group(function () {
        Route::resource('courses', CourseController::class)->only(['index', 'create', 'store', 'show']);
        Route::get('courses/{course}/modules/create', [ModuleController::class, 'create'])->name('modules.create');
        Route::post('courses/{course}/modules', [ModuleController::class, 'store'])->name('modules.store');
        Route::get('modules/{module}/lessons/create', [LessonController::class, 'create'])->name('lessons.create');
        Route::post('modules/{module}/lessons', [LessonController::class, 'store'])->name('lessons.store');
        Route::get('modules/{module}/assignments/create', [AssignmentController::class, 'create'])->name('assignments.create');
        Route::post('modules/{module}/assignments', [AssignmentController::class, 'store'])->name('assignments.store');
        Route::get('modules/{module}/quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
        Route::post('modules/{module}/quizzes', [QuizController::class, 'store'])->name('quizzes.store');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
