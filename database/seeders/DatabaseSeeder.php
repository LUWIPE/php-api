<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('cart_items')->truncate();
        DB::table('carts')->truncate();
        DB::table('products')->truncate();
        DB::table('users')->truncate();
        DB::table('types')->truncate();
        DB::table('grades')->truncate();
        DB::table('digitals')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

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
