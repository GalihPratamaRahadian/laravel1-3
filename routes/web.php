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


Route::get('', [App\Http\Controllers\CobaController::class, 'index']);
Route::get('/friends', [App\Http\Controllers\CobaController::class, 'index']);
Route::get('/friends/create', [App\Http\Controllers\CobaController::class, 'create']);
Route::post('/friends', [App\Http\Controllers\CobaController::class, 'store']);