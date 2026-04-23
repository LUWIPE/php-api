<?php

namespace Database\Seeders;

use App\Models\Digital;
use Illuminate\Database\Seeder;

class DigitalSeeder extends Seeder
{
    public function run(): void
    {
        Digital::query()->updateOrCreate(['name' => 'Ja']);
        Digital::query()->updateOrCreate(['name' => 'Nej']);
    }
}
