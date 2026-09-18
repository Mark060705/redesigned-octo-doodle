<?php

namespace Database\Factories;

use App\Models\films;
use App\Models\roles;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<roles>
 */
class RolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->randomNumber(),
            'film_id' => films::all()->random()->id,
            'user_id' => User::all()->random()->id,
            'name' => fake()->name(),
        ];
    }
}
