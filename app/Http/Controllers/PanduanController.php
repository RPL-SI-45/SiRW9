<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PanduanLayanan;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PanduanController extends Controller
{
    public function store(Request $request)
    {
        PanduanLayanan::create($request->except(['_token', 'submit']));
        return redirect('/panduanlayanan');
    }
    public function edit($id)
    {
        $panduanlayanan = PanduanLayanan::find($id);
        return view('panduanlayanan.edit', compact(['panduanlayanan']));
    }
    public function update($id, Request $request)
    {
        $panduanlayanan = PanduanLayanan::find($id);
        $panduanlayanan->update($request->except(['_token', 'submit']));
        return redirect('/panduanlayanan');
    }
    public function destroy($id)
    {
        $panduanlayanan = PanduanLayanan::find($id);
        $panduanlayanan->delete();
        return redirect('/panduanlayanan');
    }
    public function panduan(Request $request)
    {
        $panduanlayanans = PanduanLayanan::all();
        {
        $panduanlayanan = PanduanLayanan::all();
        $kategori = $request->input('kategori');
        if ($kategori) {
            $panduanlayanans = PanduanLayanan::where('KategoriPanduan', $kategori)->get();
            $panduanlayanan = PanduanLayanan::where('KategoriPanduan', $kategori)->get();
        } else {
            $panduanlayanans = PanduanLayanan::all();
            $panduanlayanan = PanduanLayanan::all();
        }
        return view('panduanlayanan.guest', compact('panduanlayanan'));
        }
    
        public function showpanduan($slug){
            $panduanlayanan = PanduanLayanan::where('slug', $slug)->first();
            return view('panduanlayanan.isi', compact('panduanlayanan'));
        }
        return view('panduanlayanan.guest', compact('panduanlayanans'));
    }


}
