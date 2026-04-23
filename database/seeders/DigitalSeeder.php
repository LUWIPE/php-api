<?php

namespace Database\Seeders;

use App\Models\Digital;
use Illuminate\Database\Seeder;

class DigitalSeeder extends Seeder
{
    public function run(): void
    {
        Digital::query()->upsert([
            ['name' => 'Ja'],
            ['name' => 'Nej'],
        ], ['name'], ['name']);
    }
}
