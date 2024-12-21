<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::insert([
            ["name" => "technical",],
            ["name" => "natural"],
            ["name" => "social"],
            ["name" => "arts"],
            ["name" => "business"],
            ["name" => "medical"],
            ["name" => "agriculture"]
        ]);
    }
}
