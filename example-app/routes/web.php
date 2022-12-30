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
Route::get('/about', [\App\Http\Controllers\AboutController::class, 'show'])
    ->name('about');
Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'show'])
    ->name('contacts');
Route::post('/contacts', [\App\Http\Controllers\ContactController::class, 'form'])
    ->name('contact.report');
Route::group(['prefix' => '/movies', 'as' => 'movie.', 'middleware' => ['auth', 'user-verify']], function () {
    Route::get('/create', [\App\Http\Controllers\MovieController::class, 'createForm'])
        ->name('create')->middleware('can:create,' . \App\Models\Movie::class);
    Route::post('/create', [\App\Http\Controllers\MovieController::class, 'create'])
        ->name('.created')->middleware('can:create,' . \App\Models\Movie::class);
    Route::get('', [\App\Http\Controllers\MovieController::class, 'list'])
        ->name('list');
    Route::get('/{movie}/show', [\App\Http\Controllers\MovieController::class, 'show'])
        ->name('show');
    Route::post('/{movie}/delete', [\App\Http\Controllers\MovieController::class, 'delete'])
        ->name(('delete'));
    Route::get('/{movie}/edit', [\App\Http\Controllers\MovieController::class, 'editForm'])
        ->name('edit.form')->middleware('can:edit,movie');
    Route::post('/{movie}/edit', [\App\Http\Controllers\MovieController::class, 'edit'])
        ->name('edit')->middleware('can:edit,movie');
});

Route::get('/sign-up', [\App\Http\Controllers\SignUpController::class, 'signForm'])
    ->name('signup.create.form');
Route::post('/sign-up/create', [\App\Http\Controllers\SignUpController::class, 'sign'])
    ->name('signup.create');
Route::get('/verify-email/{id}/{hash}', [\App\Http\Controllers\SignUpController::class, 'verifyEmail'])
    ->name('verify.email');
Route::get('/sign-in', [\App\Http\Controllers\SignInController::class, 'signInForm'])
    ->name('signin.form');
Route::post('/sign-in', [\App\Http\Controllers\SignInController::class, 'signIn'])
    ->name("signin");
Route::post('/logout', [\App\Http\Controllers\SignInController::class, 'logout'])
    ->name('logout');
Route::get('/genres/create', [\App\Http\Controllers\GenreController::class, 'createForm'])
    ->name('genre.create')->middleware('can:create,' . \App\Models\Genre::class);
Route::post('/genres/create', [\App\Http\Controllers\GenreController::class, 'create'])
    ->name('genre.created')->middleware('can:create,' . \App\Models\Genre::class);
Route::get('/genres', [\App\Http\Controllers\GenreController::class, 'list'])
    ->name('genre.list');
Route::get('genres/{genre}/show', [\App\Http\Controllers\GenreController::class, 'show'])
    ->name('genre.show');
Route::post('genres/{genre}/delete', [\App\Http\Controllers\GenreController::class, 'delete'])
    ->name(('genre.delete'));
Route::get('/genres/{genre}/edit', [\App\Http\Controllers\GenreController::class, 'editForm'])
    ->name('genre.edit.form')->middleware('can:edit,genre');
Route::post('/genres/{genre}/edit', [\App\Http\Controllers\GenreController::class, 'edit'])
    ->name('genre.edit')->middleware('can:edit,genre');
Route::get('/actors/create', [\App\Http\Controllers\ActorController::class, 'createForm'])
    ->name('actor.create')->middleware('can:create,' . \App\Models\Actor::class);
Route::post('/actors/create', [\App\Http\Controllers\ActorController::class, 'create'])
    ->name('actor.created')->middleware('can:create,' . \App\Models\Actor::class);
Route::get('/actors', [\App\Http\Controllers\ActorController::class, 'list'])
    ->name('actor.list');
Route::get('actors/{actor}/show', [\App\Http\Controllers\ActorController::class, 'show'])
    ->name('actor.show');
Route::post('actors/{actor}/delete', [\App\Http\Controllers\ActorController::class, 'delete'])
    ->name(('actor.delete'));
Route::get('/actors/{actor}/edit', [\App\Http\Controllers\ActorController::class, 'editForm'])
    ->name('actor.edit.form')->middleware('can:edit,actor');
Route::post('/actors/{actor}/edit', [\App\Http\Controllers\ActorController::class, 'edit'])
    ->name('actor.edit')->middleware('can:edit,actor');
Route::get('/logins', [\App\Http\Controllers\LoginController::class, 'show'])
    ->name('loginhistory');
