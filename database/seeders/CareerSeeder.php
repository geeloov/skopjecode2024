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
        $majors = Major::all();
        $newMajors = [];
        foreach ($majors as $major) {
            $newMajors[$major->name] = $major->id;
        }

        Career::insert([
            ["name" => "Инженер", "major_id" => $newMajors["technical"]],
            ["name" => "ИТ Специјалист", "major_id" => $newMajors["technical"]],
            ["name" => "Мехатроничар", "major_id" => $newMajors["technical"]],

            ["name" => "Природно-математички факултет", "major_id" => $newMajors["natural"]],
            ["name" => "Факултет за биотехнички науки", "major_id" => $newMajors["natural"]],
            ["name" => "Шумарски факултет", "major_id" => $newMajors["natural"]],

            ["name" => "Психолог", "major_id" => $newMajors["social"]],
            ["name" => "Социолог", "major_id" => $newMajors["social"]],
            ["name" => "Правник", "major_id" => $newMajors["social"]],
            ["name" => "Советник", "major_id" => $newMajors["social"]],

            ["name" => "Уметник", "major_id" => $newMajors["arts"]],
            ["name" => "Дизајнер", "major_id" => $newMajors["arts"]],
            ["name" => "Писател", "major_id" => $newMajors["arts"]],
            ["name" => "Музичар", "major_id" => $newMajors["arts"]],

            ["name" => "Бизнис Менаџер", "major_id" => $newMajors["business"]],
            ["name" => "Маркетинг Специјалист", "major_id" => $newMajors["business"]],
            ["name" => "Финансиски Аналитичар", "major_id" => $newMajors["business"]],
            ["name" => "Претприемач", "major_id" => $newMajors["business"]],

            ["name" => "Доктор", "major_id" => $newMajors["medical"]],
            ["name" => "Фармацевт", "major_id" => $newMajors["medical"]],
            ["name" => "Стоматолог", "major_id" => $newMajors["medical"]],
            ["name" => "Физиотерапевт", "major_id" => $newMajors["medical"]],

            ["name" => "Агроном", "major_id" => $newMajors["agriculture"]],
            ["name" => "Земјоделски Инженер", "major_id" => $newMajors["agriculture"]],
            ["name" => "Биотехнолог", "major_id" => $newMajors["agriculture"]],
            ["name" => "Еколошки Специјалист", "major_id" => $newMajors["agriculture"]]
        ]);
    }
}
