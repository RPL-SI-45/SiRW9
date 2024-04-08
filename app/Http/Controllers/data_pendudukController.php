<?php

namespace App\Http\Controllers;

use App\Models\data_penduduk;
use Illuminate\Http\Request;

class data_pendudukController extends Controller
{
    public function index(){
        $data_penduduk = data_penduduk::all();
        return view('dataPenduduk.index', compact(['data_penduduk']));
    }

    public function create() {
        return view('dataPenduduk.create');
    }

    public function store(Request $request){
        data_penduduk::create($request->except(['_token','submit']));
        return redirect('/admin/data-penduduk');
    }

    public function edit($id){
        $data_penduduk = data_penduduk::find($id);
        return view('dataPenduduk.edit', compact(['data_penduduk']));
    }

    public function update($id, Request $request) {
        $data_penduduk = data_penduduk::find($id);
        $data_penduduk->update($request->except(['_token','submit']));
        return redirect('/admin/data-penduduk');
    }

    public function destroy($id) {
        $data_penduduk = data_penduduk::find($id);
        $data_penduduk->delete();
        return redirect('/admin/data-penduduk');
    }
}

