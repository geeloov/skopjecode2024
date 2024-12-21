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
                "question" => "Што сакаше да бидеш кога ќе пораснеш?"
            ],
            [
                "question" => "Какви филмови сакаш да гледаш?"
            ],
            [
                "question" => "Каков тип на личност си?"
            ],
            [
                "question" => "Во кои активности најмногу уживаш?"
            ],
            [
                "question" => "Кој предмет најмногу ти се допаѓаше во средно училиште?"
            ],

            ]);
    }
}
