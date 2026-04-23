<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = User::query()->orderBy('id')->limit(10)->pluck('id')->all();

        foreach ($userIds as $userId) {
            Cart::query()->firstOrCreate([
                'user_id' => $userId,
            ]);
        }
    }
}
