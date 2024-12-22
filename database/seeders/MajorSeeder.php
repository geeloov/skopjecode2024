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
            ["name" => "Технички науки",],
            ["name" => "Природно-научни науки"],
            ["name" => "Општествени науки"],
            ["name" => "Уметности и хуманистички науки"],
            ["name" => "Бизнис и економски науки"],
            ["name" => "Медицински науки"],
            ["name" => "Земјоделски науки"]
        ]);
    }
}
