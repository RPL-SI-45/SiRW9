<?php

namespace App\Http\Controllers;

use App\Models\Usulanwarga;
use Illuminate\Http\Request;

class UsulanController extends Controller
{
    //
    public function index(){
        $usulanwarga = Usulanwarga::all();
        return view('usulanwarga.index',compact(['usulanwarga']));
    }

    public function create(){
        return view ('usulanwarga.create');
    }

    public function store(Request $request){
        UsulanWarga::create([
            'Judul_Usulan' => $request->input('Judul_Usulan'),
            'Nama_Pengusul' => $request->input('Nama_Pengusul'),
            'RT' => $request->input('RT'),
            'Detail_Usulan' => $request->input('Detail_Usulan'),
        ]);
        return redirect('/admin/usulanwarga');
    }

    public function edit($id){
        $usulanwarga = Usulanwarga::find($id);
        return view('usulanwarga.edit', compact(['usulanwarga']));
    }

    public function update($id, Request $request) {
        $usulanwarga = Usulanwarga::find($id);
        $usulanwarga->update($request->except(['_token','submit']));
        return redirect('/admin/usulanwarga');
    }

    public function destroy($id) {
        $usulanwarga = Usulanwarga::find($id);
        $usulanwarga->delete();
        return redirect('/admin/usulanwarga');
    }

    public function usulwarga() {
        return view ('usulanwarga.usulwarga');
    }

    public function save(Request $request){
        UsulanWarga::create([
            'Judul_Usulan' => $request->input('Judul_Usulan'),
            'Nama_Pengusul' => $request->input('Nama_Pengusul'),
            'RT' => $request->input('RT'),
            'Detail_Usulan' => $request->input('Detail_Usulan'),
        ]);
        return redirect('/');
    }
}
