<?php

namespace App\Http\Controllers;

use App\Models\PanduanLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PanduanController extends Controller
{
    public function index()
    {
        $panduanlayanan = PanduanLayanan::all();
        return view('panduan.index', compact(['panduanlayanan']));
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
        return view('panduan.guest', compact('panduanlayanan'));
    }

    public function showpanduan($slug)
    {
        $panduanlayanan = PanduanLayanan::where('slug', $slug)->first();
        return view('panduan.blog', compact('panduanlayanan'));
    }
}
