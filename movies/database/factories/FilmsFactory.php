<?php

namespace Database\Factories;

use App\Models\films;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Films>
 */
class FilmsFactory extends Factory
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
            'title' => fake()->sentence(),
            'user_id' => User::class::all()->random()->id,
            'release_year' => fake()->year(),
            'minutes' => fake()->numberBetween(60, 180),
        ];
    }
}
