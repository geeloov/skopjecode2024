<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Models\University;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function showQuiz()
    {
        return view("quiz.quiz");
    }

    public function showQuestionForm()
    {
        return view("quiz.createQuestion");
    }

    public function storeQuestion(Request $request)
    {
        $request->validate([
            "question" => ["required", "string"]
        ]);

        Question::create(["question" => $request->question]);

        return redirect()->route("dashboard");
    }

    public function dashboard()
    {
        $questions = Question::all();
        // dd($questions[0]->question);
        return view("dashboard", ["questions" => $questions]);
    }

    public function addAnswers(Question $question)
    {
        $answers = $question->answers;
        $universities = University::all();
        return view("quiz.addAnswer", ["question" => $question, "answers" => $answers, "universities" => $universities]);
    }

    public function storeAnswer(Request $request, Question $question)
    {
        // dd($request->all());
        $universityFromForm = $request->except("answer", "_token");

        $request->validate([
            "answer" => ["required", "string"]
        ]);

        $answer = $question->answers()->create([
            "answer" => $request->answer
        ]);

        foreach ($universityFromForm as $key => $value) {
            $answer->universities()->attach($key, [
                "weight" => $value
            ]);
        }

        // dd($answer);

        return redirect()->route("question.addAnswers", ["question" => $question]);
    }

    public function showAnswer(Answer $answer)
    {
        $answer->load("universities");

        // dd($answer->universities);
        return view("quiz.showAnswer", ["answer" => $answer]);
    }
}
