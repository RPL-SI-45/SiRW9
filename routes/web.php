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

Route::get('/admin/iurankas', [IuranKasController::class, 'index']);
Route::get('/admin/iurankas/create', [IuranKasController::class, 'create']);
Route::post('/admin/iurankas/store', [IuranKasController::class, 'store']);
Route::get('/admin/iurankas/edit/{id}', [IuranKasController::class, 'edit']);
Route::put('/admin/iurankas/update/{id}', [IuranKasController::class, 'update']);
Route::delete('/admin/iurankas/delete/{id}', [IuranKasController::class, 'destroy']);