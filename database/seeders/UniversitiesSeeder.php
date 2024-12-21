<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::insert([
            ["name" => "FINKI"],
            ["name" => "Brainster"],
            ["name" => "American"],
            ["name" => "Gradezen"]
        ]);
    }
}
