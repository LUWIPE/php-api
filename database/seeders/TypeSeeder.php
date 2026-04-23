<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run(): void
    {
        Type::query()->upsert([
            ['name' => 'Film', 'desc' => 'Film- eller videoudgivelse'],
            ['name' => 'Spil', 'desc' => 'Videospilstitel'],
            ['name' => 'CD', 'desc' => 'CD-udgivelse'],
            ['name' => 'LP', 'desc' => 'Vinyludgivelse'],
        ], ['name'], ['desc']);
    }
}
