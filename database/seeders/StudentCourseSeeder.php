<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentCourseSeeder extends Seeder
{
    public function run(): void
    {
        // 3 môn học
        $courses = Course::factory()->count(3)->create();

        // 10 sinh viên, mỗi sinh viên đăng ký ngẫu nhiên 1–3 môn
        Student::factory()->count(10)->create()->each(function ($student) use ($courses) {
            $student->courses()->attach(
                $courses->random(rand(1, 3))->pluck('id')->toArray()
            );
        });
    }
}
