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
                "answer" => "Интроверт",
                "question_id" => 2
            ],
            [
                "answer" => "Екстроверт",
                "question_id" => 2
            ],
            [
                "answer" => "Астронаут/научник",
                "question_id" => 3
            ],
            [
                "answer" => "Доктор/ветеринар",
                "question_id" => 3
            ],
            [
                "answer" => "Уметник/музичар",
                "question_id" => 3
            ],
            [
                "answer" => "Претприемач",
                "question_id" => 3
            ],
            [
                "answer" => "Sci-Fi",
                "question_id" => 4
            ],
            [
                "answer" => "Comedy",
                "question_id" => 4
            ],
            [
                "answer" => "Action/Thriller",
                "question_id" => 4
            ],
            [
                "answer" => "Documentary",
                "question_id" => 4
            ],
            [
                "answer" => "Drama",
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
            [
                "answer" => "Логичко размислување и анализа",
                "question_id" => 7
            ],
            [
                "answer" => "Истражување и експериментирање",
                "question_id" => 7
            ],
            [
                "answer" => "Соработка и комуникација со други луѓе",
                "question_id" => 7
            ],
            [
                "answer" => "Креативни идеи и иновативни решенија",
                "question_id" => 7
            ],
            [
                "answer" => "Работа со броеви/податоци",
                "question_id" => 8
            ],
            [
                "answer" => "Анализа на природни процеси и експериментирање",
                "question_id" => 8
            ],
            [
                "answer" => "Организација на настани или комуникација со луѓе",
                "question_id" => 8
            ],
            [
                "answer" => "Дизајнирање, цртање/иновација",
                "question_id" => 8
            ],
            [
                "answer" => "Практична работа и решавање проблеми",
                "question_id" => 9
            ],
            [
                "answer" => "Истражување, читање и експериментирање",
                "question_id" => 9
            ],
            [
                "answer" => "Дискусии и размена на идеи со други луѓе",
                "question_id" => 9
            ],
            [
                "answer" => "Креативни проекти и визуелно учење",
                "question_id" => 9
            ],
            [
                "answer" => "Техничка прецизност и иновации",
                "question_id" => 10
            ],
            [
                "answer" => "Придонес кон науката и природата",
                "question_id" => 10
            ],
            [
                "answer" => "Работа со луѓе и создавање промени во општеството",
                "question_id" => 10
            ],
            [
                "answer" => "Креативна слобода и уметничко изразување",
                "question_id" => 10
            ],

            ]);
    }
}
