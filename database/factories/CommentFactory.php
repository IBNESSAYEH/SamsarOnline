<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'contenu' => $this->faker->paragraph, // Generate a fake content
            'user_id' => $this->faker->numberBetween(1, 10), // Assuming you have 10 users
            'annonce_id' => $this->faker->numberBetween(1, 20),
        ];
    }
}
