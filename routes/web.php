<?php

use App\Http\Controllers\IuranKasController;
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

Route::get('/iurankas', [IuranKasController::class, 'index']);

Route::get('/iurankas/create', [IuranKasController::class, 'create']);

Route::post('/iurankas/store', [IuranKasController::class, 'store']);