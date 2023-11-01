<?php

use App\Http\Controllers\MovieController;
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

Route::get('/',[MovieController::class, 'index']) ->name('movie.lista');
Route::get('/{id}', [MovieController::class,'especific']) ->name('movie.especifico');
Route::post('/', [MovieController::class,'add']) ->name('movie.add');
Route::delete('delete/{id}',[MovieController::class,'delete']) ->name('movie.eliminar');
Route::put('update',[MovieController::class,'update']) ->name('movie.actualizar');

