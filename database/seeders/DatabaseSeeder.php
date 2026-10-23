<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        $this->call(StudentCourseSeeder::class);

        // 5 categories, mỗi category 10 products
        Category::factory()
            ->count(5)
            ->hasProducts(10)
            ->create();

        // Users + Profile (One to One)
        $test = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Profile::factory()->create(['user_id' => $test->id]);

        User::factory()->count(4)->create()->each(function ($user) {
            Profile::factory()->create(['user_id' => $user->id]);
        });
    }
}
