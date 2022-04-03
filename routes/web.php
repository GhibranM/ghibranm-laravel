<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ghibranController;
use App\Http\Controllers\biodataController;

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

Route::get('/', [ghibranController::class, 'index']);

Route::get('/home', [ghibranController::class, 'home']);

Route::get('/biodata', [biodataController::class, 'biodata']);

Route::get('/komentar', [ghibranController::class, 'komentar']);