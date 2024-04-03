<?php

namespace App\Http\Controllers;
use App\Models\Surat_online;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat_online::all();
        return view('suratonline.index', compact('surat'));
        // dd($surat);
    }
    public function create()
    {
        return view('suratonline.create');
    }
    //
}
