<?php

use App\Http\Controllers\BeritaKegiatanController;
use App\Http\Controllers\IuranKasController;
use App\Http\Controllers\data_pendudukController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\UsulanController;
use App\Models\data_penduduk;
use App\Models\Usulanwarga;
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

//iurankas
Route::get('/admin/iurankas', [IuranKasController::class, 'index']);
Route::get('/admin/iurankas/create', [IuranKasController::class, 'create']);
Route::post('/admin/iurankas/store', [IuranKasController::class, 'store']);
Route::get('/admin/iurankas/edit/{id}', [IuranKasController::class, 'edit']);
Route::put('/admin/iurankas/update/{id}', [IuranKasController::class, 'update']);
Route::delete('/admin/iurankas/delete/{id}', [IuranKasController::class, 'destroy']);
Route::get('/iurankas', [IuranKasController::class, 'bayar']);
Route::post('/iurankas/store', [IuranKasController::class, 'simpan']);

//datapenduduk
Route::get('/admin/data-penduduk', [data_pendudukController::class, 'index']);
Route::get('/admin/data-penduduk/create', [data_pendudukController::class, 'create']);
Route::post('/admin/data-penduduk/store', [data_pendudukController::class, 'store']);
Route::get('/admin/data-penduduk/{id}/edit', [data_pendudukController::class, 'edit']);
Route::put('/admin/data-penduduk/{id}', [data_pendudukController::class, 'update']);
Route::delete('/admin/data-penduduk/{id}', [data_pendudukController::class, 'destroy']);

//suratonline

Route::get('/admin/suratonline', [SuratController::class, 'index']);
Route::get('/suratonline/create', [SuratController::class, 'create']);
Route::post('/suratonline/store', [SuratController::class, 'gstore']);
Route::get('/admin/suratonline/create', [SuratController::class, 'admincreate']);
Route::post('/admin/suratonline/store', [SuratController::class, 'store']);
Route::get('/admin/suratonline/{id}/edit', [SuratController::class, 'edit']);
Route::put('/admin/suratonline/{id}', [SuratController::class, 'update']);
Route::delete('/admin/suratonline/{id}', [SuratController::class, 'destroy']);

//usulanwarga
Route::get('/admin/usulanwarga', [UsulanController::class, 'index']);
Route::get('/admin/usulanwarga/create', [UsulanController::class, 'create']);
Route::post('/admin/usulanwarga/store', [UsulanController::class, 'store']);
Route::get('/admin/usulanwarga/edit/{id}', [UsulanController::class, 'edit']);
Route::put('/admin/usulanwarga/update/{id}', [UsulanController::class, 'update']);
Route::delete('/admin/usulanwarga/delete/{id}', [UsulanController::class, 'destroy']);
Route::get('/usulanwarga', [UsulanController::class, 'usulwarga']);
Route::post('/usulanwarga/store', [UsulanController::class, 'save']);

//berita kegiatan
Route::get('/admin/beritakegiatan', [BeritaKegiatanController::class, 'adminindex']);
Route::get('/admin/beritakegiatan/create', [BeritaKegiatanController::class, 'create']);
Route::post('/admin/beritakegiatan/store', [BeritaKegiatanController::class, 'store']);
Route::get('/admin/beritakegiatan/checkSlug', [BeritaKegiatanController::class, 'checkSlug']);
Route::get('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'adminshow']);
Route::get('/admin/beritakegiatan/{beritakegiatan}/edit', [BeritaKegiatanController::class, 'edit']);
Route::put('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'update']);
Route::delete('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'destroy']);
Route::get('/beritakegiatan/{slug}', [BeritaKegiatanController::class, 'usershow'])->name('blog-details');
Route::get('/beritakegiatan', [BeritaKegiatanController::class, 'userview']);

//aduanwarga
Route::get('/aduanwarga/create', [AduanController::class, 'gcreate']);
Route::post('/aduanwarga/store', [AduanController::class, 'gstore']);
