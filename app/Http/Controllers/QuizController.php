<?php

namespace App\Http\Controllers;

use App\Models\Major;
use App\Models\Answer;
use App\Models\Question;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class QuizController extends Controller
{

    public function showStep($step = 1)
    {
        $questions = Question::with('answers')->get();

        if ($step < 1 || $step > $questions->count()) {
            abort(404);
        }

        $answers = session('quiz_answers', []);

        return view('quiz.step', [
            'step' => $step,
            'question' => $questions[$step - 1],
            'totalSteps' => $questions->count(),
            'answers' => $answers,
        ]);
    }

    public function storeAnswer(Request $request, $step)
    {
        // Validate the selected answer
        $request->validate([
            'answer' => 'required',
        ]);

        // Store the answer in the session
        $answers = session('quiz_answers', []);
        $answers[$step] = $request->input('answer');
        session(['quiz_answers' => $answers]);

        // Redirect to the next step or finish
        $nextStep = $step + 1;
        if ($nextStep > Question::count()) {
            return redirect()->route('quiz.results');
        }

        return redirect()->route('quiz.step', ['step' => $nextStep]);
    }



    public function results()
    {
        // Retrieve all answers from the session
        $saveAnswers = session('quiz_answers', []);

        $user = FacadesAuth::user();

        $user->answers()->attach($saveAnswers);

        $answers = $user->answers()->with('majors')->get();

        $majorWeights = [];

        foreach ($answers as $answer) {
            foreach ($answer->majors as $major) {
                if (!isset($majorWeights[$major->name])) {
                    $majorWeights[$major->name] = 0;
                }
                $majorWeights[$major->name] += $major->pivot->weight;
            }
        }


        $total = array_sum($majorWeights);

        $percentages = [];
        foreach ($majorWeights as $category => $value) {
            $percentages[$category] = $total > 0 ? round(($value / $total) * 100, 0) : 0;
        }

        arsort($percentages);
        $percentages = array_slice($percentages, 0, 3, true);

        $keys = array_keys($percentages);
        $values = array_values($percentages);

        if (count($percentages) == 0) {
            return redirect()->route("quiz.step", ["step" => 1]);
        }

        $majorId1 = Major::select("id")->where("name", $keys[0] ?? null)->pluck("id");
        $majorId2 = Major::select("id")->where("name", $keys[1] ?? null)->pluck("id");
        $majorId3 = Major::select("id")->where("name", $keys[2] ?? null)->pluck("id");

        if ($majorId1->isEmpty()) {
            $majorId1 = null;
        } else {
            $majorId1 = $majorId1[0];
        }
        if ($majorId2->isEmpty()) {
            $majorId2 = null;
        } else {
            $majorId2 = $majorId2[0];
        }
        if ($majorId3->isEmpty()) {
            $majorId3 = null;
        } else {
            $majorId3 = $majorId3[0];
        }

        $user->result()->create([
            "major1" => $majorId1,
            "major2" => $majorId2,
            "major3" => $majorId3,
            "major1_prob" => $values[0] ?? null,
            "major2_prob" => $values[1] ?? null,
            "major3_prob" => $values[2] ?? null,
        ]);



        $result = $user->result()->with("relatedMajor1", "relatedMajor2", "relatedMajor3")->first();

        session()->forget('quiz_answers');

        return view('results', ["result" => $result]);
    }

    public function showQuestionForm()
    {
        return view('createQuestion');
    }
    public function showQuestions()
    {
        $questions = Question::all(); // Assuming you have a Question model
        return view('admin_questions', compact('questions'));
    }


    public function storeQuestion(Request $request)
    {
        $request->validate([
            "question" => ["required", "string"]
        ]);

        Question::create(["question" => $request->question]);

        return redirect()->route("question.show");
    }

    public function dashboard()
    {
        $questions = Question::all();
        // dd($questions[0]->question);
        return view("dashboard", ["questions" => $questions]);
    }

    public function destroyQuestion($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return redirect()->back()->with('error', 'Question not found.');
        }


        $question->delete();

        return redirect()->route('question.show');
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

    public function addAnswer(Request $request, Question $question)
    {
        // dd($request->all());
        $majorFromForm = $request->except("answer", "_token");

        $request->validate([
            "answer" => ["required", "string"]
        ]);

        $answer = $question->answers()->create([
            "answer" => $request->answer
        ]);

        foreach ($majorFromForm as $key => $value) {
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

    public function showFaculties()
    {

        $faculties = University::all();
        return view("admin_faculties", ["faculties" => $faculties]);
    }

    public function test() {}
}
