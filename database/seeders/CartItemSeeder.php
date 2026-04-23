<?php

namespace Database\Seeders;

use App\Models\CartItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CartItemSeeder extends Seeder
{
    public function run(): void
    {
        $cartIds = Cart::query()->orderBy('id')->limit(10)->pluck('id')->all();
        $productIds = Product::query()->orderBy('id')->limit(10)->pluck('id')->all();

        $rows = [];
        for ($i = 0; $i < 10; $i++) {
            $rows[] = [
                'cart_id' => $cartIds[$i],
                'product_id' => $productIds[$i],
                'amount' => $i + 1,
            ];
        }

        CartItem::query()->insert($rows);
    }
}
