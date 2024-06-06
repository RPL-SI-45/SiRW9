<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PanduanLayanan;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;


class PanduanController extends Controller
{
    public function index(){
        $panduanlayanan = PanduanLayanan::all();
        return view('panduanlayanan.index',compact(['panduanlayanan']));
    }

    public function gpanduan(Request $request)
    {
        $panduanlayanan = PanduanLayanan::all(); {
            $panduanlayanan = PanduanLayanan::all();
            $kategori = $request->input('kategori');
            if ($kategori) {
                $panduanlayanan = PanduanLayanan::where('KategoriPanduan', $kategori)->get();
            } else {
                $panduanlayanan = PanduanLayanan::all();
            }
            return redirect('/panduanlayanan');
        }
    }

    public function blogpanduan($slug)
    {
        $panduanlayanan = PanduanLayanan::where('slug', $slug)->first();
        return view('panduanlayanan.isi', compact('panduanlayanan'));
    }
}
