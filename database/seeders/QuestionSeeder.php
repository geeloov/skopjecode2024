<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::insert([
            [
                "question" => "Во каква средина живееш?"
            ],
            [
                "question" => "Каков тип на личност си?"
            ],
            [
                "question" => "Што сакаше да бидеш кога ќе пораснеш?"
            ],
            [
                "question" => "Какви филмови сакаш да гледаш?"
            ],
            [
                "question" => "Во кои активности најмногу уживаш?"
            ],
            [
                "question" => "Кој предмет најмногу ти се допаѓаше во средно училиште?"
            ],
            [
                "question" => "Како пристапуваш кон проблемите?"
            ],
            [
                "question" => "Кој тип на задачи најмногу ти одговараат?"
            ],
            [
                "question" => "Koj е твојот идеален начин за учење нови работи?"
            ],
            [
                "question" => "Што е најважно за тебе во идната кариера?"
            ]
            ]);
    }
}
