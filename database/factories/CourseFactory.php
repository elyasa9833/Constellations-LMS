<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CourseCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'creator_id' => User::factory(),
            'category_id' => CourseCategory::factory(),
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'total_experience' => fake()->numberBetween(100, 1000),
        ];
    }
}
