<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Answer::insert([
            [
                "answer" => "Голем град",
                "question_id" => 1
            ],
            [
                "answer" => "Предградие",
                "question_id" => 1
            ],
            [
                "answer" => "Рурална средина",
                "question_id" => 1
            ],
            [
                "answer" => "Астронаут/научник",
                "question_id" => 2
            ],
            [
                "answer" => "Доктор/ветеринар",
                "question_id" => 2
            ],
            [
                "answer" => "Уметник/музичар",
                "question_id" => 2
            ],
            [
                "answer" => "Претприемач",
                "question_id" => 2
            ],
            [
                "answer" => "Sci-Fi",
                "question_id" => 3
            ],
            [
                "answer" => "Comedy",
                "question_id" => 3
            ],
            [
                "answer" => "Action/Thriller",
                "question_id" => 3
            ],
            [
                "answer" => "Documentary",
                "question_id" => 3
            ],
            [
                "answer" => "History",
                "question_id" => 3
            ],
            [
                "answer" => "Интроверт",
                "question_id" => 4
            ],
            [
                "answer" => "Екстроверт",
                "question_id" => 4
            ],
            [
                "answer" => "Решавање логички задачи или проблеми",
                "question_id" => 5
            ],
            [
                "answer" => "Дизајнирање или создавање нешто ново",
                "question_id" => 5
            ],
            [
                "answer" => "Помагање на луѓето и правење разлика",
                "question_id" => 5
            ],
            [
                "answer" => "Читање, пишување или раскажување приказни",
                "question_id" => 5
            ],
            [
                "answer" => "Работа со технологија или програмирање",
                "question_id" => 5
            ],
            [
                "answer" => "Математика",
                "question_id" => 6
            ],
            [
                "answer" => "Природни науки (Биологија, Хемија, Физика)",
                "question_id" => 6
            ],
            [
                "answer" => "Уметност или Дизајн",
                "question_id" => 6
            ],
            [
                "answer" => "Општествени науки (Историја, Социологија, Психологија)",
                "question_id" => 6
            ],
            [
                "answer" => "Литература или Јазици",
                "question_id" => 6
            ],
            [
                "answer" => "Информатика",
                "question_id" => 6
            ],
            ]);
    }
}
