<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Annonce>
 */
class AnnonceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'date_publication' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'date_construction' => $this->faker->dateTimeBetween('-10 years', 'now'),
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->safeEmail,
            'adresse' => $this->faker->address,
            'month_price' => $this->faker->numberBetween(100, 1000),
            'week_price' => $this->faker->numberBetween(50, 500),
            'day_price' => $this->faker->numberBetween(20, 200),
            'hour_price' => $this->faker->numberBetween(10, 100),
            'sataut' => $this->faker->randomElement(['disponible', 'non disponible']),
            'category_id' => $this->faker->numberBetween(1, 3), // Assuming you have 3 categories
            'user_id' => $this->faker->numberBetween(1, 10), // Assuming you have 10 users
            'type_id' => $this->faker->numberBetween(1, 5), // Assuming you have 5 types
            'city_id' => $this->faker->numberBetween(1, 20), // Assuming you have 20 cities
        ];
    }
}
