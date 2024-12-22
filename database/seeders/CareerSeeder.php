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
            ["name" => "Инженер", "major_id" => $newMajors["Технички науки"]],
            ["name" => "ИТ Специјалист", "major_id" => $newMajors["Технички науки"]],
            ["name" => "Мехатроничар", "major_id" => $newMajors["Технички науки"]],

            ["name" => "Природно-математички факултет", "major_id" => $newMajors["Природни науки"]],
            ["name" => "Факултет за биотехнички науки", "major_id" => $newMajors["Природни науки"]],
            ["name" => "Шумарски факултет", "major_id" => $newMajors["Природни науки"]],

            ["name" => "Психолог", "major_id" => $newMajors["Социјални науки"]],
            ["name" => "Социолог", "major_id" => $newMajors["Социјални науки"]],
            ["name" => "Правник", "major_id" => $newMajors["Социјални науки"]],
            ["name" => "Советник", "major_id" => $newMajors["Социјални науки"]],

            ["name" => "Уметник", "major_id" => $newMajors["Уметнички науки"]],
            ["name" => "Дизајнер", "major_id" => $newMajors["Уметнички науки"]],
            ["name" => "Писател", "major_id" => $newMajors["Уметнички науки"]],
            ["name" => "Музичар", "major_id" => $newMajors["Уметнички науки"]],

            ["name" => "Бизнис Менаџер", "major_id" => $newMajors["Бизнис и претприемништво"]],
            ["name" => "Маркетинг Специјалист", "major_id" => $newMajors["Бизнис и претприемништво"]],
            ["name" => "Финансиски Аналитичар", "major_id" => $newMajors["Бизнис и претприемништво"]],
            ["name" => "Претприемач", "major_id" => $newMajors["Бизнис и претприемништво"]],

            ["name" => "Доктор", "major_id" => $newMajors["Наука за медицина"]],
            ["name" => "Фармацевт", "major_id" => $newMajors["Наука за медицина"]],
            ["name" => "Стоматолог", "major_id" => $newMajors["Наука за медицина"]],
            ["name" => "Физиотерапевт", "major_id" => $newMajors["Наука за медицина"]],

            ["name" => "Агроном", "major_id" => $newMajors["Земјоделски науки"]],
            ["name" => "Земјоделски Инженер", "major_id" => $newMajors["Земјоделски науки"]],
            ["name" => "Биотехнолог", "major_id" => $newMajors["Земјоделски науки"]],
            ["name" => "Еколошки Специјалист", "major_id" => $newMajors["Земјоделски науки"]]
        ]);
    }
}
