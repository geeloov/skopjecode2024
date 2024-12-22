<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("universities")->insert([
            [
                "name" => "ФИНКИ",
                "major_id" => 1
            ],
            [
                "name" => "ФЕИТ",
                "major_id" => 1
            ],
            [
                "name" => "Машински факултет",
                "major_id" => 1
            ],


            [
                "name" => "Природно-математички факултет",
                "major_id" => 2
            ],
            [
                "name" => "Факултет за биотехнички науки",
                "major_id" => 2
            ],
            [
                "name" => "Шумарски факултет",
                "major_id" => 2
            ],


            [
                "name" => "Филозофски факултет",
                "major_id" => 3
            ],
            [
                "name" => "Правен факултет",
                "major_id" => 3
            ],
            [
                "name" => "Факултет за безбедност",
                "major_id" => 3
            ],


            [
                "name" => "Факултет за ликовни уметности",
                "major_id" => 4
            ],
            [
                "name" => "Факултет за музичка уметност",
                "major_id" => 4
            ],
            [
                "name" => "Филолошки факултет 'Блаже Конески'",
                "major_id" => 4
            ],



            [
                "name" => "Економски факултет",
                "major_id" => 5
            ],
            [
                "name" => "Факултет за туризам и угостителство",
                "major_id" => 5
            ],
            [
                "name" => "Факултет за бизнис и економија",
                "major_id" => 5
            ],



            [
                "name" => "Медицински факултет",
                "major_id" => 6
            ],
            [
                "name" => "Фармацевтски факултет",
                "major_id" => 6
            ],
            [
                "name" => "Стоматолошки факултет",
                "major_id" => 6
            ],


            [
                "name" => "Факултет за земјоделски науки и храна",
                "major_id" => 7
            ],
            [
                "name" => "Факултет за ветеринарна медицина",
                "major_id" => 7
            ],
            [
                "name" => "Технолошко-металуршки факултет",
                "major_id" => 7
            ],
            ]);
    }
}
