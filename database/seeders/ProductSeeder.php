<?php

namespace Database\Seeders;

use App\Models\Digital;
use App\Models\Grade;
use App\Models\Product;
use App\Models\Type;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $typeIds = Type::query()->pluck('id', 'name');
        $gradeIds = Grade::query()->pluck('id', 'name');
        $digitalIds = Digital::query()->pluck('id', 'name');

        Product::query()->updateOrCreate(['name' => 'Nordlys'], ['type_id' => $typeIds['Film'], 'grade_id' => $gradeIds['A'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2021-11-12', 'desc' => 'Dansk drama pa Blu-ray.', 'stock' => 16, 'img_url' => 'https://placehold.co/150x200', 'price' => 149]);
        Product::query()->updateOrCreate(['name' => 'Skyggejagt'], ['type_id' => $typeIds['Film'], 'grade_id' => $gradeIds['B'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2020-09-04', 'desc' => 'Spændingsfilm med nordisk tema.', 'stock' => 9, 'img_url' => 'https://placehold.co/150x200', 'price' => 129]);
        Product::query()->updateOrCreate(['name' => 'Havets Kald'], ['type_id' => $typeIds['Film'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Ja'], 'release' => '2024-02-20', 'desc' => 'Digital naturdokumentar i 4K.', 'stock' => 999, 'img_url' => 'https://placehold.co/150x200', 'price' => 99]);
        Product::query()->updateOrCreate(['name' => 'Runesten Online'], ['type_id' => $typeIds['Spil'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Ja'], 'release' => '2025-03-18', 'desc' => 'Massivt online rollespil.', 'stock' => 999, 'img_url' => 'https://placehold.co/150x200', 'price' => 449]);
        Product::query()->updateOrCreate(['name' => 'Turbo Banen 2026'], ['type_id' => $typeIds['Spil'], 'grade_id' => $gradeIds['A'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2026-01-30', 'desc' => 'Racerspil med lokal multiplayer.', 'stock' => 22, 'img_url' => 'https://placehold.co/150x200', 'price' => 399]);
        Product::query()->updateOrCreate(['name' => 'Mystisk O'], ['type_id' => $typeIds['Spil'], 'grade_id' => $gradeIds['B'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2023-10-06', 'desc' => 'Eventyrspil med puzzle-elementer.', 'stock' => 13, 'img_url' => 'https://placehold.co/150x200', 'price' => 299]);
        Product::query()->updateOrCreate(['name' => 'Live i Parken'], ['type_id' => $typeIds['CD'], 'grade_id' => $gradeIds['A'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2019-05-24', 'desc' => 'Koncertoptagelse pa CD.', 'stock' => 18, 'img_url' => 'https://placehold.co/150x200', 'price' => 119]);
        Product::query()->updateOrCreate(['name' => 'Byens Rytmer'], ['type_id' => $typeIds['CD'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Ja'], 'release' => '2024-08-09', 'desc' => 'Digital albumudgivelse.', 'stock' => 999, 'img_url' => 'https://placehold.co/150x200', 'price' => 89]);
        Product::query()->updateOrCreate(['name' => 'Nordisk Jazz Samling'], ['type_id' => $typeIds['CD'], 'grade_id' => $gradeIds['C'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2017-03-10', 'desc' => 'Klassiske jazzspor pa CD.', 'stock' => 7, 'img_url' => 'https://placehold.co/150x200', 'price' => 99]);
        Product::query()->updateOrCreate(['name' => 'Sommerregn'], ['type_id' => $typeIds['LP'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2022-07-01', 'desc' => 'Vinyl med indiepop og ballader.', 'stock' => 12, 'img_url' => 'https://placehold.co/150x200', 'price' => 249]);
        Product::query()->updateOrCreate(['name' => 'Midnatssol Deluxe'], ['type_id' => $typeIds['LP'], 'grade_id' => $gradeIds['A'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2021-04-16', 'desc' => 'Dobbelt-LP i gatefold cover.', 'stock' => 15, 'img_url' => 'https://placehold.co/150x200', 'price' => 349]);
    }
}
