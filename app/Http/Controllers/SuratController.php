<?php

namespace App\Http\Controllers;

use App\Models\Surat_online;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(){
        $surat_online = Surat_online::all();
        return view('suratonline.index', compact(['surat_online']));
    }
}
