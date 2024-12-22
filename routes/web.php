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

    Route::get("/quiz", [QuizController::class, "showStep"])->name("quiz.show");
    Route::get('/quiz/results', [QuizController::class, 'results'])->name('quiz.results');
    Route::get('/quiz/{step}', [QuizController::class, 'showStep'])->name('quiz.step');
    Route::post('/quiz/{step}', [QuizController::class, 'storeAnswer'])->name('quiz.store');
});

// available routes only for admin
Route::middleware(['auth', 'verified', "showDashboard"])->group(function () {
    Route::get("/dashboard", [QuizController::class, "dashboard"])->name("dashboard");
    Route::get("/createQuestion", [QuizController::class, "showQuestionForm"])->name("question.create");
    Route::post("/createQuestion", [QuizController::class, "storeQuestion"])->name("question.store");
    Route::get("/question/{question}", [QuizController::class, "addAnswers"])->name("question.addAnswers");
    Route::post("/question/{question}", [QuizController::class, "addAnswer"])->name('question.addAnswer');
    Route::delete('/questions/{id}', [QuizController::class, 'destroyQuestion'])->name('questions.destroy');


    Route::get("/answer/{answer}", [QuizController::class, "showAnswer"])->name("question.showAnswer");
    Route::delete("/answer/{answer}", [QuizController::class, "deleteAnswer"])->name("answer.delete");
});
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/policy', function () {
    return view('policy');
})->name('policy');

Route::get('/main', function () {
    return view('main');
})->name('main');

Route::get('/results', function () {
    return view('results');
});
Route::get('/admin-main', [QuizController::class, 'showQuestions'])->name('question.show');

Route::get('/admin-faculties', function () {
    return view('admin_faculties');
});

Route::get('/admin-statistics', function () {
    return view('admin_stats');
});


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('admin', function () {
    return view('admin');
});
// Route::get("/test", [QuizController::class, "test"]);
require __DIR__ . '/auth.php';
