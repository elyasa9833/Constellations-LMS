<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CourseChapter>
 */
class CourseChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $courseId = Course::all()->random()->id;
        return [
            'course_id' => $courseId ?? Course::factory(),
            'title' => fake()->sentence(),
        ];
    }
}
