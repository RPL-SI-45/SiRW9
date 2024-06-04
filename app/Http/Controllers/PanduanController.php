<?php

namespace App\Http\Controllers;

use App\Models\PanduanLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PanduanController extends Controller
{
    public function index(){
        $panduanlayanan = PanduanLayanan::all();
        return view('panduanlayanan.index',compact(['panduanlayanan']));
    }

    public function create(){
        return view ('panduanlayanan.create');
    }

    public function store(Request $request){
        PanduanLayanan::create($request->except(['_token','submit']));
        return redirect('/admin/panduanlayanan');
    }

    public function edit($id){
        $panduanlayanan = PanduanLayanan::find($id);
        return view('panduanlayanan.edit', compact(['panduanlayanan']));
    }

    public function update($id, Request $request) {
        $panduanlayanan = PanduanLayanan::find($id);
        $panduanlayanan->update($request->except(['_token','submit']));
        return redirect('/admin/panduanlayanan');
    }

    public function destroy($id) {
        $panduanlayanan = PanduanLayanan::find($id);
        $panduanlayanan->delete();
        return redirect('/admin/panduanlayanan');
    }

    public function panduan(Request $request)
    {
    $panduanlayanan = PanduanLayanan::all();
    $kategori = $request->input('kategori');
    if ($kategori) {
        $panduanlayanan = PanduanLayanan::where('KategoriPanduan', $kategori)->get();
    } else {
        $panduanlayanan = PanduanLayanan::all();
    }
    return view('panduanlayanan.guest', compact('panduanlayanan'));
    }

    public function showpanduan($slug){
        $panduanlayanan = PanduanLayanan::where('slug', $slug)->first();
        return view('panduanlayanan.isi', compact('panduanlayanan'));
    }
}
