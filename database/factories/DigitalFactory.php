<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DigitalFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Physical', 'Digital']),
        ];
    }
}
