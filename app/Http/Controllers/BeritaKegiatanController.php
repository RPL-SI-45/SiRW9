<?php

namespace App\Http\Controllers;

use App\Models\Beritakegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Services\SlugService;

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
            'isi' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/beritakegiatan/';
            $file->move($path, $filename);
            $validatedData['image'] = $path . $filename;
        }

        $validatedData['slug'] = SlugService::createSlug(Beritakegiatan::class, 'slug', $request->judul);
        $validatedData['deskripsi'] = Str::limit(strip_tags($request->isi), 150);

        Beritakegiatan::create($validatedData);

        return redirect('/admin/beritakegiatan')->with('sukses', 'Berhasil menambahkan berita kegiatan baru!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Beritakegiatan::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }

    public function adminshow(Beritakegiatan $beritakegiatan) {
        return view('beritakegiatan.adminshow', compact('beritakegiatan'));
    }

    public function edit(Beritakegiatan $beritakegiatan) {
        return view('beritakegiatan.edit', compact('beritakegiatan'));
    }

    public function update(Request $request, Beritakegiatan $beritakegiatan) {
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'mimes:png,jpg,jpeg,webp|max:2048' 
        ]);
    
        if ($request->hasFile('image')) {
            
            // Upload the new image file
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $path = 'uploads/beritakegiatan/';

            // Delete the old image file if it exists
            if ($beritakegiatan->image && file_exists(public_path($beritakegiatan->image))) {
                unlink(public_path($beritakegiatan->image));
            }
            
            $file->move($path, $filename);
            $validatedData['image'] = $path . $filename;
            
        }
    
        // Update other fields
        $validatedData['slug'] = SlugService::createSlug(Beritakegiatan::class, 'slug', $request->judul);
        $validatedData['deskripsi'] = Str::limit(strip_tags($request->isi), 150);
    
        // Update the record
        $beritakegiatan->update($validatedData);
    
        return redirect('/admin/beritakegiatan')->with('sukses', 'Berhasil mengupdate berita kegiatan!');
    }
    

    public function destroy(Beritakegiatan $beritakegiatan) {
        if ($beritakegiatan->image && file_exists(public_path($beritakegiatan->image))) {
            unlink(public_path($beritakegiatan->image));
        }
        $beritakegiatan->delete();
        return redirect('/admin/beritakegiatan')->with('delete', 'Berhasil menghapus berita kegiatan!');
    }
}

