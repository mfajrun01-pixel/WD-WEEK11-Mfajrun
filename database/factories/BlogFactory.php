<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends Factory<Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $number = 1;
        return [
            'user_id' => User::factory(),
            'number' => $number++,
            'category' => fake()->randomElement(['Web Development', 'Mobile App', 'UI/UX Design']),
            'title' => fake()->sentence(),
            'description' => fake()->paragraph(),
            'tools' => (fake()->words(3)),
            'symbol' => fake()->randomElement(['PHP', 'JavaScript', 'Python', 'Java']),
        ];
    }
}
