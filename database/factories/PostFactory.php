<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// php artisan make:factory PostFactory -m Post
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(1, true),
            'text' => $this->faker->paragraph(1),
        ];
    }
}
