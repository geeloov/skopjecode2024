<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerMajorWeightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("answer_major")->insert([
            ["major_id" => 1, "answer_id" => 1, "weight" => 3],
            ["major_id" => 2, "answer_id" => 4, "weight" => 2],
            ["major_id" => 1, "answer_id" => 8, "weight" => 3],
            ["major_id" => 3, "answer_id" => 14, "weight" => 1],
            ["major_id" => 2, "answer_id" => 16, "weight" => 1],
        ]);
    }
}
