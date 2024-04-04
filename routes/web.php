<?php

use App\Http\Controllers\SuratController;
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
// Route::get('/suratonline', function(){
//     return 'test';
// });
Route::get('/admin/suratonline', [SuratController::class, 'index']);
Route::get('/admin/suratonline/create', [SuratController::class, 'create']);
Route::post('/admin/suratonline/store', [SuratController::class, 'store']);
Route::get('/admin/suratonline/{id}/edit', [SuratController::class, 'edit']);
Route::put('/admin/suratonline/{id}', [SuratController::class, 'update']);
Route::delete('/admin/suratonline/{id}', [SuratController::class, 'destroy']);
