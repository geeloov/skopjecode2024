<?php

namespace App\Http\Controllers;

use App\Models\Major;
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
    return view('createQuestion'); 
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
    $majors = Major::all(); 

    return view('addAnswer', [
        'question' => $question,
        'answers' => $answers,
        'majors' => $majors,
    ]);
}

    public function deleteAnswer(Answer $answer)
{
    // Detach all associated majors (if applicable)
    $answer->majors()->detach();

    // Delete the answer
    $answer->delete();

    // Redirect back to the question's answers page
    return redirect()->route("question.addAnswers", ["question" => $answer->question_id])
                     ->with("success", "Одговорот е успешно избришан!");
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
            $answer->majors()->attach($key, [
                "weight" => $value
            ]);
        }

        // dd($answer);

        return redirect()->route("question.addAnswers", ["question" => $question]);
    }

    public function showAnswer(Answer $answer)
    {
        $answer->load("majors");

        // dd($answer->universities);
        return view("quiz.showAnswer", ["answer" => $answer]);
    }

    public function test() {}
}
