<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                "name" => "Администратор",
                "lastname" => "Admin",
                "email" => "admin@example.com",
                "password" => Hash::make("password"),
                "email_verified_at" => null,
                "is_admin" => true
            ],
            [
                "name" => "Alice",
                "lastname" => "Burton",
                "email" => "alice@example.com",
                "password" => Hash::make("password"),
                "email_verified_at" => null,
                "is_admin" => false
            ]
        ]);
    }
}
