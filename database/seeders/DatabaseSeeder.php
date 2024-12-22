<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\MajorSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            MajorSeeder::class,
            CareerSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            AnswerMajorWeightsSeeder::class, // mock treba da gi sredeme da dademe vistinski vrednosti so gpt
        ]);
        // za da raboti deka gi ima odgovoreno ovie prasanja bidejki na ovie imam zadadeno tezini
        DB::table("answer_user")->insert([
            ["user_id" => 1, "answer_id" => 1],
            ["user_id" => 1, "answer_id" => 4],
            ["user_id" => 1, "answer_id" => 8],
            ["user_id" => 1, "answer_id" => 14],
            ["user_id" => 1, "answer_id" => 16],

        ]);

        DB::table("universities")->insert([
            ["name" => "technical university", "major_id" => 1],
            ["name" => "technical university2", "major_id" => 1],

            ["name" => "Prirodni university2", "major_id" => 2],
            ["name" => "Kopac university2", "major_id" => 2],
            ["name" => "Motika university2", "major_id" => 2],

            ["name" => "social university1", "major_id" => 3],
            ["name" => "social university2", "major_id" => 3],
            ["name" => "social university3", "major_id" => 3],
        ]);
    }
}
