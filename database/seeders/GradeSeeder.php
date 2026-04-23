<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    public function run(): void
    {
        Grade::query()->updateOrCreate(['name' => 'S'], ['desc' => 'Som ny stand']);
        Grade::query()->updateOrCreate(['name' => 'A'], ['desc' => 'Fremragende stand']);
        Grade::query()->updateOrCreate(['name' => 'B'], ['desc' => 'God stand']);
        Grade::query()->updateOrCreate(['name' => 'C'], ['desc' => 'Rimelig stand']);
        Grade::query()->updateOrCreate(['name' => 'D'], ['desc' => 'Dårlig stand']);
    }
}
