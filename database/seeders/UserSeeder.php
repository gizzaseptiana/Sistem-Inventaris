<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::updateOrCreate(
            ['email' => 'admin@inventaris.com'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('password123'),
                'role' => 'admin'
            ]
        );

        // User Biasa
        User::updateOrCreate(
            ['email' => 'user@inventaris.com'],
            [
                'name' => 'User Biasa',
                'password' => Hash::make('password123'),
                'role' => 'user'
            ]
        );
    }
}