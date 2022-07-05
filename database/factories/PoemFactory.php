<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

// php artisan make:factory PoemFactory -m Poem
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poem>
 */
class PoemFactory extends Factory
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
            'poem_category_id' => $this->faker->numberBetween(11, 15),
        ];
    }
}
