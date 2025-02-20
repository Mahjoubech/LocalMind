<?php
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReponseController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class , 'index'])->name('qstHome');
Route::post('/Question',[QuestionController::class , 'store'])->name('Question.create');
Route::get('/Questions/{qs}',[QuestionController::class , 'show'])->name('Question.show');
Route::get('/Questions/{qs}/edit',[QuestionController::class , 'edit'])->name('Question.edit');
Route::put('/Questions/{qs}',[QuestionController::class , 'update'])->name('Question.update');
Route::delete('/Question/{id}',[QuestionController::class , 'destroy'])->name('Question.delete');

//commment
Route::post('/Questions/{id}/reponses',[ReponseController::class , 'store'])->name('Question.reponsestore');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
