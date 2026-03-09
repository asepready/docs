<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);

        $adminRole = Role::where('name', 'admin')->first();
        $teacherRole = Role::where('name', 'teacher')->first();
        $studentRole = Role::where('name', 'student')->first();

        $admin = User::factory()->create([
            'name' => 'Admin User',
            'username' => 'admin',
            'email' => 'admin@example.com',
            'type' => 'admin',
        ]);

        if ($adminRole) {
            $admin->roles()->attach($adminRole);
        }

        $teacher = User::factory()->create([
            'name' => 'Teacher User',
            'username' => 'teacher',
            'email' => 'teacher@example.com',
            'type' => 'teacher',
        ]);

        if ($teacherRole) {
            $teacher->roles()->attach($teacherRole);
        }

        $student = User::factory()->create([
            'name' => 'Student User',
            'username' => 'student',
            'email' => 'student@example.com',
            'type' => 'student',
        ]);

        if ($studentRole) {
            $student->roles()->attach($studentRole);
        }
    }
}
