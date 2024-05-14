<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AduanController extends Controller
{
    public function index()
    {
        $iurankas = Aduanwarga::all();
        return view('aduanwarga.index', compact(['aduanwarga']));
    }
}
