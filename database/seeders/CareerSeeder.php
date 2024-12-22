<?php

namespace Database\Seeders;

use App\Models\Career;
use App\Models\Major;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $majors = Major::all();
        // $newMajors = [];
        // foreach ($majors as $major) {
        //     $newMajors[$major->name] = $major->id;
        // }

        Career::insert([
            ["name" => "Инженер", "major_id" => 1],
            ["name" => "ИТ Специјалист", "major_id" => 1],
            ["name" => "Мехатроничар", "major_id" => 1],

            ["name" => "Природно-математички факултет", "major_id" => 2],
            ["name" => "Факултет за биотехнички науки", "major_id" => 2],
            ["name" => "Шумарски факултет", "major_id" => 2],

            ["name" => "Психолог", "major_id" => 3],
            ["name" => "Социолог", "major_id" => 3],
            ["name" => "Правник", "major_id" => 3],
            ["name" => "Советник", "major_id" => 3],

            ["name" => "Уметник", "major_id" => 4],
            ["name" => "Дизајнер", "major_id" => 4],
            ["name" => "Писател", "major_id" => 4],
            ["name" => "Музичар", "major_id" => 4],

            ["name" => "Бизнис Менаџер", "major_id" => 5],
            ["name" => "Маркетинг Специјалист", "major_id" => 5],
            ["name" => "Финансиски Аналитичар", "major_id" => 5],
            ["name" => "Претприемач", "major_id" => 5],

            ["name" => "Доктор", "major_id" => 6],
            ["name" => "Фармацевт", "major_id" => 6],
            ["name" => "Стоматолог", "major_id" => 6],
            ["name" => "Физиотерапевт", "major_id" => 6],

            ["name" => "Агроном", "major_id" => 7],
            ["name" => "Земјоделски Инженер", "major_id" => 7],
            ["name" => "Биотехнолог", "major_id" => 7],
            ["name" => "Еколошки Специјалист", "major_id" => 7]
        ]);
    }
}
