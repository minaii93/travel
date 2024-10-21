<?php

namespace Database\Factories;

use App\Models\Airlines;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flights>
 */
class FlightsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'airline_id' => Airlines::all()->random()->airline_id,
            'limit' => rand(1,201)
        ];
    }
}
