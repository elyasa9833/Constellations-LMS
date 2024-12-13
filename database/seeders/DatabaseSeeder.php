<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\CourseChapter;
use App\Models\CourseCategory;
use Illuminate\Database\Seeder;
use Database\Seeders\CourseCategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        $this->call([CourseCategorySeeder::class]);
        Course::factory(10)->create();
        CourseChapter::factory(20)->create();

    }
}
