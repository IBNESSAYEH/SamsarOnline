<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $roles = ['Admin', 'User', 'Editor', 'Manager']; // Define your list of roles

        return [
            'name' => $this->faker->unique()->randomElement($roles), // Randomly select a role from the list
        ];
    }
}
