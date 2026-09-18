<?php

namespace Database\Factories;

use App\Models\Copy;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Copy>
 */
class CopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'book_id' => \App\Models\Book::all()->random()->id,
            'user_id' => \App\Models\User::all()->random()->id,
        ];
    }
}
