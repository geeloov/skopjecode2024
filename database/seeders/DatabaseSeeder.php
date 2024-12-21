<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            User::create([
                "name" => "John",
                "lastname" => "Admin",
                "email" => "admin@example.com",
                "password" => Hash::make("password"),
                "email_verified_at" => null,
                "is_admin" => true,
            ]),
            User::create([
                "name" => "Alice",
                "lastname" => "Burton",
                "email" => "alice@example.com",
                "password" => Hash::make("password"),
                "email_verified_at" => null,
                "is_admin" => false,
            ])
        ]);
    }
}
