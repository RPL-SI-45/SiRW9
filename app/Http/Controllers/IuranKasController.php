<?php

namespace App\Http\Controllers;

use App\Models\Iurankas;
use Illuminate\Http\Request;

class IuranKasController extends Controller
{
    public function index()
    {
        $iurankas = Iurankas::all();
        return view('iurankas.index', compact(['iurankas']));
    }

    public function create()
    {
        return view('iurankas.bayar');
    }

    public function store(Request $request)
    {
        Iurankas::create($request->except(['_token', 'submit']));
        return redirect('/');
    }
}
