<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
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


Route::get('/', [HomeController::class, 'home'])->name('homepage');
Route::get('/games', [GameController::class, 'index'])->name('games.index');
Route::get('users/register', [UserController::class,'create'])->name('users.create');
Route::post('users/register', [UserController::class,'store'])->name('users.store');
Route::get('users/login', [UserController::class,'login'])->name('users.login');
Route::post('users/login', [UserController::class,'signin'])->name('users.signin');
Route::get('/users/logout', [UserController::class, 'logout'])->name('users.logout');
