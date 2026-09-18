<?php

namespace Database\Factories;

use App\Models\genders;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Genders>
 */
class GendersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->unique()->randomElement([1, 2]),
            'name' => fake()->randomElement(['Male', 'Female']),
        ];
    }
}
