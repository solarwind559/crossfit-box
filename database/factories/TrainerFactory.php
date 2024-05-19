<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrainerModel>
 */
class TrainerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name,
            'surname' => fake()->lastName, // Changed from 'surname' to 'lastName'
            'speciality' => fake()->word, // Assuming 'speciality' is a single word
            'image' => fake()->imageUrl, // Generates a random image URL
            'description' => fake()->text, // Generates a random block of text
        ];
    }
}
