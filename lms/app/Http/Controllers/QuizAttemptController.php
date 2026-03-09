<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Quiz;
use App\Models\QuizAttempt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuizAttemptController extends Controller
{
    public function store(Request $request, Quiz $quiz)
    {
        $user = Auth::user();

        $attemptNumber = (int) ($quiz->attempts()->where('user_id', $user->id)->max('attempt_number') ?? 0) + 1;

        $attempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'user_id' => $user->id,
            'attempt_number' => $attemptNumber,
            'started_at' => now(),
        ]);

        $answers = $request->input('answers', []);
        $score = 0;
        $totalWeight = 0;

        foreach ($quiz->questions as $question) {
            $totalWeight += (float) $question->weight;

            $selectedOptionIds = (array) ($answers[$question->id] ?? []);

            $correctOptionIds = $question->options()->where('is_correct', true)->pluck('id')->all();

            sort($selectedOptionIds);
            sort($correctOptionIds);

            if ($selectedOptionIds === $correctOptionIds && count($correctOptionIds) > 0) {
                $score += (float) $question->weight;
            }
        }

        $finalScore = $totalWeight > 0 ? ($score / $totalWeight) * 100 : null;

        $attempt->update([
            'score' => $finalScore,
            'completed_at' => now(),
        ]);

        return back()->with('status', 'Quiz selesai. Skor: '.round((float) $finalScore, 2));
    }
}

