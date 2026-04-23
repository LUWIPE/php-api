<?php

namespace Database\Factories;

use App\Models\Type;
use App\Models\Grade;
use App\Models\Digital;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'type_id' => Type::query()->inRandomOrder()->value('id'),
            'grade_id' => Grade::query()->inRandomOrder()->value('id'),
            'is_digital_id' => Digital::query()->inRandomOrder()->value('id'),
            'release' => fake()->date(),
            'desc' => fake()->sentence(),
            'stock' => fake()->numberBetween(0, 1000),
            'img_url' => fake()->imageUrl(),
            'price' => fake()->numberBetween(1000, 100000),
        ];
    }
}
