<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['S', 'A', 'B', 'C', 'D']),
            'desc' => fake()->sentence(),
        ];
    }
}
