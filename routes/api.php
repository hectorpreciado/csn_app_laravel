<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/', [MovieController::class,'index']);
Route::get('/{id}', [MovieController::class,'especific']);
Route::post('/', [MovieController::class,'add']);
Route::delete('delete/{id}',[MovieController::class,'delete']);
Route::put('update',[MovieController::class,'update']);
