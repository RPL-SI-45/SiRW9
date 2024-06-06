<?php

use App\Http\Controllers\BeritaKegiatanController;
use App\Http\Controllers\IuranKasController;
use App\Http\Controllers\data_pendudukController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilRWController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\UsulanController;
use App\Http\Controllers\SessionController;
use App\Models\data_penduduk;
use App\Models\Usulanwarga;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
//login
Route::get("/login", [SessionController::class, 'index'])->name('login');
Route::post("/login/masuk", [SessionController::class, 'login']);

//middleware
Route::middleware(['auth'])->group(function () {
    // IuranKas
    Route::get('/admin/iurankas', [IuranKasController::class, 'index']);
    Route::get('/admin/iurankas/create', [IuranKasController::class, 'create']);
    Route::post('/admin/iurankas/store', [IuranKasController::class, 'store']);
    Route::get('/admin/iurankas/edit/{id}', [IuranKasController::class, 'edit']);
    Route::put('/admin/iurankas/update/{id}', [IuranKasController::class, 'update']);
    Route::delete('/admin/iurankas/delete/{id}', [IuranKasController::class, 'destroy']);

    // DataPenduduk
    Route::get('/admin/data-penduduk', [data_pendudukController::class, 'index']);
    Route::get('/admin/data-penduduk/create', [data_pendudukController::class, 'create']);
    Route::post('/admin/data-penduduk/store', [data_pendudukController::class, 'store']);
    Route::get('/admin/data-penduduk/{id}/edit', [data_pendudukController::class, 'edit']);
    Route::put('/admin/data-penduduk/{id}', [data_pendudukController::class, 'update']);
    Route::delete('/admin/data-penduduk/{id}', [data_pendudukController::class, 'destroy']);

    // SuratOnline
    Route::get('/admin/suratonline', [SuratController::class, 'index']);
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

    //beritakegiatan
    Route::get('/admin/beritakegiatan', [BeritaKegiatanController::class, 'adminindex']);
    Route::get('/admin/beritakegiatan/create', [BeritaKegiatanController::class, 'create']);
    Route::post('/admin/beritakegiatan/store', [BeritaKegiatanController::class, 'store']);
    Route::get('/admin/beritakegiatan/checkSlug', [BeritaKegiatanController::class, 'checkSlug']);
    Route::get('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'adminshow']);
    Route::get('/admin/beritakegiatan/{beritakegiatan}/edit', [BeritaKegiatanController::class, 'edit']);
    Route::put('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'update']);
    Route::delete('/admin/beritakegiatan/{beritakegiatan}', [BeritaKegiatanController::class, 'destroy']);


    // User Profile
    Route::get('/admin/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/admin/account-settings', [UserController::class, 'accountSettings'])->name('account.settings');
    Route::post('/admin/account-settings/change-password', [UserController::class, 'changePassword'])->name('change.password');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
    
    //pengaduanwarga(adm)
    Route::get('/admin/pengaduanwarga', [AduanController::class, 'index']);
    Route::get('/admin/pengaduanwarga/create', [AduanController::class, 'create']);
    Route::post('/admin/pengaduanwarga/store', [AduanController::class, 'store']); 
    Route::get('/admin/pengaduanwarga/edit/{id}', [AduanController::class, 'edit']);
    Route::put('/admin/pengaduanwarga/{id}', [AduanController::class, 'update']);
    Route::delete('/admin/pengaduanwarga/delete/{id}', [AduanController::class, 'destroy']);

});

//suratonline
Route::get('/suratonline/create', [SuratController::class, 'create']);
Route::post('/suratonline/store', [SuratController::class, 'gstore']);

//iurankas
Route::get('/iurankas', [IuranKasController::class, 'bayar']);
Route::post('/iurankas/store', [IuranKasController::class, 'simpan']);

//usulanwarga
Route::get('/usulanwarga', [UsulanController::class, 'usulwarga']);
Route::post('/usulanwarga/store', [UsulanController::class, 'save']);

//berita kegiatan
Route::get('/beritakegiatan/{slug}', [BeritaKegiatanController::class, 'usershow'])->name('blog-details');
Route::get('/beritakegiatan', [BeritaKegiatanController::class, 'userview']);

//aduanwarga
Route::get('/aduanwarga/create', [AduanController::class, 'gcreate']);
Route::post('/aduanwarga/store', [AduanController::class, 'gstore']);

//profile
Route::get('/profilrw/index', [ProfilRWController::class, 'index']);
