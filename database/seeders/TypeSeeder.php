<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        Type::query()->updateOrCreate(['name' => 'Film'], ['desc' => 'Film- eller videoudgivelse']);
        Type::query()->updateOrCreate(['name' => 'Spil'], ['desc' => 'Videospilstitel']);
        Type::query()->updateOrCreate(['name' => 'CD'], ['desc' => 'CD-udgivelse']);
        Type::query()->updateOrCreate(['name' => 'LP'], ['desc' => 'Vinyludgivelse']);
    }
}
