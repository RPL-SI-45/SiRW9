<?php

use App\Http\Controllers\data_pendudukController;
use App\Http\Controllers\SuratController;
use App\Models\data_penduduk;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/data-penduduk', [data_pendudukController::class, 'index']);
Route::get('/admin/data-penduduk/create', [data_pendudukController::class, 'create']);
Route::post('/admin/data-penduduk/store', [data_pendudukController::class, 'store']);
Route::get('/admin/data-penduduk/{id}/edit', [data_pendudukController::class, 'edit']);
Route::put('/admin/data-penduduk/{id}', [data_pendudukController::class, 'update']);
Route::delete('/admin/data-penduduk/{id}', [data_pendudukController::class, 'destroy']);

//suratonline

Route::get('/suratonline', [SuratController::class, 'index']);
Route::get('/suratonline/create', [SuratController::class, 'create']);
Route::get('/suratonline/store', [SuratController::class, 'store']);