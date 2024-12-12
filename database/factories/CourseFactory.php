<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\CourseCategory;
use App\Enums\CourseStatusEnum;
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
        $userId = User::all()->random()->id;
        $categoryId = CourseCategory::all()->random()->id;
        return [
            'creator_id' => $userId ?? User::factory(),
            'category_id' => $categoryId ?? CourseCategory::factory(),
            'name' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'total_experience' => fake()->numberBetween(100, 1000),
            'status' => CourseStatusEnum::Live->value,
        ];
    }
}
