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
    public function create(){
        $surat_online = Surat_online::all();
        return view('suratonline.create', compact(['surat_online']));
    }
    public function store(){
        $surat_online = Surat_online::all();
        return view('suratonline.store', compact(['surat_online']));
    }
};
