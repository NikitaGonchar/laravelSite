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
