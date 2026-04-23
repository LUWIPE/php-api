<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->upsert([
            ['name' => 'Admin User', 'email' => 'admin@example.com', 'password' => Hash::make('password')],
            ['name' => 'User One', 'email' => 'user1@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Two', 'email' => 'user2@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Three', 'email' => 'user3@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Four', 'email' => 'user4@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Five', 'email' => 'user5@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Six', 'email' => 'user6@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Seven', 'email' => 'user7@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Eight', 'email' => 'user8@example.com', 'password' => Hash::make('password')],
            ['name' => 'User Nine', 'email' => 'user9@example.com', 'password' => Hash::make('password')],
        ], ['email'], ['name', 'password']);
    }
}
