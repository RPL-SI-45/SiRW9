<?php



use Illuminate\Support\Facades\Route;
use App\Http\Contollers\SuratController;
use App\Models\surat_online;

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

Route::get('/',function(){
    return view('welcome');
});

Route::get('/suratonline',function (){
    return view('suratonline.index');
});

Route::get('/suratonline/create',function (){
    return view('suratonline.create');
});

Route::POST('/suratonline/store',function (){
    return view('suratonline.store');
});
