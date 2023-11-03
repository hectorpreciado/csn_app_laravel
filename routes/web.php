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
Route::get('/add', [MovieController::class,'create'])->name('movie.create');
Route::post('/store', [MovieController::class, 'store'])->name('movie.store');
Route::get('/update/{id}', [MovieController::class,'actualizar'])->name('movie.actualizar');
Route::put('/actualizar/{id}',[MovieController::class, 'update'])->name('movie.update');
Route::delete('/delete/{id}',[MovieController::class,'del']) ->name('movie.delete');
Route::get('/show/{id}', [MovieController::class, 'show'])->name('movie.show');

