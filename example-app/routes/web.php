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
Route::get('/sign-up', [\App\Http\Controllers\SignUpController::class, 'signForm'])
    ->name('signup.create.form');
Route::post('/sign-up/create', [\App\Http\Controllers\SignUpController::class, 'sign'])
    ->name('signup.create');
Route::get('/verify-email/{id}/{hash}', [\App\Http\Controllers\SignUpController::class, 'verifyEmail'])
    ->name('verify.email');
