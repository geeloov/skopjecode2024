<?php

namespace App\Livewire;

use App\Models\Answer;
use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class Quiz extends Component
{
    public $questions = [];
    public $answers = [];
    public $question;
    public $totalSteps = 1;
    public $currentStep = 0;



    public function mount()
    {
        $this->questions = Question::all();
        $this->question = $this->questions[$this->currentStep];
        foreach ($this->questions as $question) {
            $this->answers[$question->id] = null;
        }

        $this->totalSteps = count($this->questions);
    }

    public function saveAnswer(Answer $answer, Question $question)
    {
        $this->answers[$question->id] = $answer->id;

        if ($this->currentStep + 1 == $this->totalSteps) {
            Auth::user()->answers()->sync($this->answers);

            return redirect()->route("quiz.results");
        }
        $this->currentStep++;
        $this->question = $this->questions[$this->currentStep];
    }

    public function goBack($step)
    {
        $this->currentStep--;
        $this->question = $this->questions[$this->currentStep];
    }

    public function render()
    {
        return view('livewire.quiz');
    }
}
