<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Caracteristique>
 */
class CaracteristiqueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'etage' => $this->faker->numberBetween(1, 10),
            'surface' => $this->faker->numberBetween(50, 300),
            'number_rooms' => $this->faker->numberBetween(1, 5),
            'number_salle' => $this->faker->numberBetween(1, 3),
            'number_salle_bain' => $this->faker->numberBetween(1, 3),
            'assenceur' => $this->faker->boolean,
            'balcon' => $this->faker->boolean,
            'terrasse' => $this->faker->boolean,
            'piscine' => $this->faker->boolean,
            'jardin' => $this->faker->boolean,
            'parking' => $this->faker->boolean,
        ];
    }
}
