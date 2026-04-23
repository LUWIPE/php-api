<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run(): void
    {
        Grade::query()->upsert([
            ['name' => 'S', 'desc' => 'Som ny stand'],
            ['name' => 'A', 'desc' => 'Fremragende stand'],
            ['name' => 'B', 'desc' => 'God stand'],
            ['name' => 'C', 'desc' => 'Rimelig stand'],
            ['name' => 'D', 'desc' => 'Dårlig stand'],
        ], ['name'], ['desc']);
    }
}
