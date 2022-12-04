<?php

use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [TeamController::class,'index']);

Route::get('/teams/{id}', [TeamController::class,'show'])->name('single-team');

Route::get('/player/{id}', [PlayersController::class,'show'])->name('single-player');
