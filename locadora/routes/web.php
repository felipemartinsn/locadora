<?php

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
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'home']);
Route::get('/filmes/create', [MovieController::class, 'create']);
Route::post('/filmes', [MovieController::class, 'store']);
Route::get('/filmes/', [MovieController::class, 'filmes']);

