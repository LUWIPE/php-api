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

        Product::query()->updateOrCreate(['name' => 'The Hobbit: Desolation of Smaug'], ['type_id' => $typeIds['Film'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2014-01-01', 'desc' => 'Extended edition fra 2014 med ekstramateriale og behind the scenes. Afspillet få gange.', 'stock' => 1, 'img_url' => '/images/products/the-hobbit-desolation-of-smaug-extended.jpg', 'price' => 200]);
        Product::query()->updateOrCreate(['name' => '5 Seconds of Summer'], ['type_id' => $typeIds['CD'], 'grade_id' => $gradeIds['B'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2014-01-01', 'desc' => 'Originalt selvbetitlet album købt ved udgivelse, næsten ikke afspillet.', 'stock' => 1, 'img_url' => '/images/products/5-seconds-of-summer.jpg', 'price' => 100]);
        Product::query()->updateOrCreate(['name' => 'Pink Floyd - Dark Side of the Moon'], ['type_id' => $typeIds['LP'], 'grade_id' => $gradeIds['B'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '1997-01-01', 'desc' => 'Re-release af Dark Side of the Moon (1973), genudgivet i 1997. Originale plakater medfølger.', 'stock' => 1, 'img_url' => '/images/products/pink-floyd-dark-side-of-the-moon.png', 'price' => 3000]);
        Product::query()->updateOrCreate(['name' => 'Battlefield 1'], ['type_id' => $typeIds['Spil'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2016-01-01', 'desc' => 'Battlefield 1 i uåbnet tilstand, købt i 2016.', 'stock' => 1, 'img_url' => '/images/products/battlefield-1.jpg', 'price' => 100]);
        Product::query()->updateOrCreate(['name' => 'CSI: Miami s. 1-3'], ['type_id' => $typeIds['Serie'], 'grade_id' => $gradeIds['S'], 'is_digital_id' => $digitalIds['Nej'], 'release' => '2003-01-01', 'desc' => 'De tre første sæsoner af krimiserien CSI: Miami. Original release 2003.', 'stock' => 1, 'img_url' => '/images/products/csi-miami-s1-s2-s3.jpg', 'price' => 350]);
    }
}
