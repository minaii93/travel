<?php

namespace Database\Seeders;

use App\Models\Airlines;
use App\Models\Flights;
use App\Models\Travels;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();
        Airlines::factory(10)->create();
        Flights::factory(10)->create();
        Travels::factory(10)->create();
    }
}
