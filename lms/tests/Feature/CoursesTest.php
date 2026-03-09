<?php

namespace Tests\Feature;

use App\Models\Course;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CoursesTest extends TestCase
{
    use RefreshDatabase;

    public function test_teacher_can_create_course(): void
    {
        $teacher = User::factory()->create(['type' => 'teacher']);

        $this->actingAs($teacher)
            ->post(route('courses.store'), [
                'code' => 'LNX101',
                'title' => 'Linux Fundamentals',
                'description' => 'Intro course',
            ])
            ->assertRedirect();

        $this->assertDatabaseHas('courses', [
            'code' => 'LNX101',
            'title' => 'Linux Fundamentals',
        ]);
    }
}

