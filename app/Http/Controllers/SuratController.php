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

    public function store(Request $request){
    {
        surat_online::create($request->except(['_token','submit']));
        return redirect('/suratonline.index');
    }
}

