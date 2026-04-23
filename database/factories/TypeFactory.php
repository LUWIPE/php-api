<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'desc' => fake()->sentence(),
        ];
    }
}
