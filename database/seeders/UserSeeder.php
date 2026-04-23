<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::query()->updateOrCreate(['email' => 'admin@example.com'], ['name' => 'Admin User', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user1@example.com'], ['name' => 'User One', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user2@example.com'], ['name' => 'User Two', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user3@example.com'], ['name' => 'User Three', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user4@example.com'], ['name' => 'User Four', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user5@example.com'], ['name' => 'User Five', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user6@example.com'], ['name' => 'User Six', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user7@example.com'], ['name' => 'User Seven', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user8@example.com'], ['name' => 'User Eight', 'password' => Hash::make('password')]);
        User::query()->updateOrCreate(['email' => 'user9@example.com'], ['name' => 'User Nine', 'password' => Hash::make('password')]);
    }
}
