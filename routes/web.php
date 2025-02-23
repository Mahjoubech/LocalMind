<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReponseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowerController;
use App\Http\Controllers\FavoriteController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class , 'index'])->name('qstHome');
//grouping routages
Route::group(['prefix' => 'Question/','as' => 'Question.','middleware' => 'auth'],function(){ Route::post('',[QuestionController::class , 'store'])->name('create');
Route::get('/{qs}',[QuestionController::class , 'show'])->name('show');
Route::get('/{qs}/edit',[QuestionController::class , 'edit'])->name('edit');
Route::put('/{qs}',[QuestionController::class , 'update'])->name('update');
Route::delete('/{id}',[QuestionController::class , 'destroy'])->name('delete');
Route::post('/{qs}/reponses',[ReponseController::class , 'store'])->name('reponsestore');

});
//register
Route::get('/register',[AuthController::class , 'register'])->name('register');
Route::post('/register',[AuthController::class , 'store']);
//login
Route::get('/login',[AuthController::class , 'login'])->name('login');
Route::post('/login',[AuthController::class , 'authenticate']);
//logout
Route::post('/logout',[AuthController::class , 'logout'])->name('logout');
//profile
Route::get('profile',[UserController::class, 'profile'])->name('profile')->middleware('auth');
Route::get('profile/{user}', [UserController::class, 'show'])
    ->name('profile.show')
    ->middleware('auth');

//Reponses
Route::delete('/Question/{id}/reponses',[ReponseController::class , 'destroy'])->name('Reponse.delete');

//resource
Route::resource('user',UserController::class)->only('edit','show','update')->middleware('auth');

//follower

Route::post('users/{user}/follow',[FollowerController::class , 'follow'])->name('users.follow')->middleware('auth');;
Route::post('users/{user}/unfollow',[FollowerController::class , 'unfollow'])->name('users.unfollow')->middleware('auth');;
//favorite
Route::middleware('auth')->group(function () {
    Route::get('favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('favorites', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('favorites/{question_id}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
    Route::get('favorites/{question_id}', [FavoriteController::class, 'show'])->name('favorites.show');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [UserController::class, 'index'])->name('chat.index');
    Route::post('/chat/send', [UserController::class, 'send'])->name('chat.send');
    Route::get('/chat/messages', [UserController::class, 'fetchMessages'])->name('chat.fetchMessages');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
