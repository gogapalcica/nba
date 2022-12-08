<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommentsController;

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

Route::get('/', [TeamController::class,'index']);
Route::get('/teams/{id}', [TeamController::class,'show'])->name('single-team');

Route::post('/teams/{id}/comments', [CommentsController::class, 'store']);

Route::get('/player/{id}', [PlayersController::class,'show'])->name('single-player');

Route::get('/register',[RegisterController::class,'create']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login',[LoginController::class,'store']);
Route::get('/logout',[LoginController::class,'destroy']);
