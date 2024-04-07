<?php

namespace App\Http\Controllers;

use App\Models\surat_online;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(){
        $surat_online=surat_online::all();
        return view('suratOnline.index', compact(['surat_online']));
    }
}

    public function create(){
        $surat_online=surat_online::all();
        return view('suratOnline.create', compact(['surat_online']));
}
