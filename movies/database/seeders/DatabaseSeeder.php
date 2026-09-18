<?php

namespace Database\Seeders;

use App\Models\films;
use App\Models\genders;
use App\Models\roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        genders::factory(2)->create();
        User::factory(10)->create();
        films::factory(10)->create();
        roles::factory(10)->create();
    }
}
