<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            DigitalSeeder::class,
            TypeSeeder::class,
            GradeSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            CartItemSeeder::class,
        ]);
    }
}
