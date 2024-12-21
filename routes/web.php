<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/quiz", [QuizController::class, "showQuiz"])->name("quiz.show");
});

// available routes only for admin
Route::middleware(['auth', 'verified', "showDashboard"])->group(function () {
    Route::get("/dashboard", [QuizController::class, "dashboard"])->name("dashboard");
    Route::get("/createQuestion", [QuizController::class, "showQuestionForm"])->name("question.create");
    Route::post("/createQuestion", [QuizController::class, "storeQuestion"]);

    Route::get("/question/{question}", [QuizController::class, "addAnswers"])->name("question.addAnswers");
    Route::post("/question/{question}", [QuizController::class, "storeAnswer"]);

    Route::get("/answer/{answer}", [QuizController::class, "showAnswer"])->name("question.showAnswer");
});

require __DIR__ . '/auth.php';
