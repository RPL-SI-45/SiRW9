<?php

namespace App\Http\Controllers;

use App\Models\Beritakegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class BeritaKegiatanController extends Controller
{
    public function adminindex(){
        $berita_kegiatan = Beritakegiatan::all();
        return view('beritakegiatan.adminindex', compact('berita_kegiatan'));
    }

    public function create() {
        return view('beritakegiatan.create');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $validatedData['slug'] = SlugService::createSlug(Beritakegiatan::class, 'slug', $request->judul);
        $validatedData['deskripsi'] = Str::limit(strip_tags($request->isi), 150);

        Beritakegiatan::create($validatedData);
        
        return redirect('/admin/beritakegiatan')->with('Sukses', 'Berhasil menambahkan berita kegiatan baru!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Beritakegiatan::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
