<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])
    ->name('main');
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> master
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'show'])
    ->name('about');
Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'show'])
    ->name('contacts');
Route::post('/contacts', [\App\Http\Controllers\ContactController::class, 'form'])
    ->name('contact.report');
<<<<<<< HEAD
=======
=======
=======
>>>>>>> hw19
>>>>>>> master
Route::get('/movies/create', [\App\Http\Controllers\MovieController::class, 'createForm'])
    ->name('movie.create');
Route::post('/movies/create', [\App\Http\Controllers\MovieController::class, 'create'])
    ->name('movie.created');
Route::get('/movies', [\App\Http\Controllers\MovieController::class, 'list'])
    ->name('movie.list');
Route::get('movies/{movie}/show', [\App\Http\Controllers\MovieController::class, 'show'])
    ->name('movie.show');
Route::post('movies/{movie}/delete', [\App\Http\Controllers\MovieController::class, 'delete'])
    ->name(('movie.delete'));
Route::get('/movies/{movie}/edit', [\App\Http\Controllers\MovieController::class, 'editForm'])
    ->name('movie.edit.form');
Route::post('/movies/{movie}/edit', [\App\Http\Controllers\MovieController::class, 'edit'])
    ->name('movie.edit');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> hw19
=======
>>>>>>> hw19
=======
>>>>>>> master
Route::get('/sign-up', [\App\Http\Controllers\SignUpController::class, 'signForm'])
    ->name('signup.create.form');
Route::post('/sign-up/create', [\App\Http\Controllers\SignUpController::class, 'sign'])
    ->name('signup.create');
Route::get('/verify-email/{id}/{hash}', [\App\Http\Controllers\SignUpController::class, 'verifyEmail'])
    ->name('verify.email');
<<<<<<< HEAD
Route::get('/sign-in', [\App\Http\Controllers\SignInController::class, 'signInForm'])
    ->name('signin.form');
Route::post('/sign-in', [\App\Http\Controllers\SignInController::class, 'signIn'])
    ->name("signin");
Route::post('/logout', [\App\Http\Controllers\SignInController::class, 'logout'])
    ->name('logout');
Route::get('/genres/create', [\App\Http\Controllers\GenreController::class, 'createForm'])
    ->name('genre.create');
Route::post('/genres/create', [\App\Http\Controllers\GenreController::class, 'create'])
    ->name('genre.created');
Route::get('/genres', [\App\Http\Controllers\GenreController::class, 'list'])
    ->name('genre.list');
Route::get('genres/{genre}/show', [\App\Http\Controllers\GenreController::class, 'show'])
    ->name('genre.show');
Route::post('genres/{genre}/delete', [\App\Http\Controllers\GenreController::class, 'delete'])
    ->name(('genre.delete'));
Route::get('/genres/{genre}/edit', [\App\Http\Controllers\GenreController::class, 'editForm'])
    ->name('genre.edit.form');
Route::post('/genres/{genre}/edit', [\App\Http\Controllers\GenreController::class, 'edit'])
    ->name('genre.edit');
Route::get('/actors/create', [\App\Http\Controllers\ActorController::class, 'createForm'])
    ->name('actor.create');
Route::post('/actors/create', [\App\Http\Controllers\ActorController::class, 'create'])
    ->name('actor.created');
Route::get('/actors', [\App\Http\Controllers\ActorController::class, 'list'])
    ->name('actor.list');
Route::get('actors/{actor}/show', [\App\Http\Controllers\ActorController::class, 'show'])
    ->name('actor.show');
Route::post('actors/{actor}/delete', [\App\Http\Controllers\ActorController::class, 'delete'])
    ->name(('actor.delete'));
Route::get('/actors/{actor}/edit', [\App\Http\Controllers\ActorController::class, 'editForm'])
    ->name('actor.edit.form');
Route::post('/actors/{actor}/edit', [\App\Http\Controllers\ActorController::class, 'edit'])
    ->name('actor.edit');
=======
>>>>>>> hw20
>>>>>>> master
