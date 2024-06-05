<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilRW;
use Illuminate\Support\Facades\File;

class ProfilRWController extends Controller
{
    // Menampilkan halaman profil RW
    public function profilrw()
    {
        // Ambil data profil RW dari database (misal menggunakan model ProfilRW)
        $profilRW = ProfilRW::first();
        return view('profilrw.profilrw', compact('profilRW'));
    }

    //Menampilkan halaman create profil RW
    public function create()
    {
        return view('profilrw.createprofil');
    }

    //store profil RW
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:3648',
        ]);

        if ($request->has('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            
            $path = 'uploads/profilrw/';
            $file->move($path, $filename);
            // $path = $file->storeAs('images', $filename, 'public');

            ProfilRW::create([
                'description' => $request->description,
                'image' => $path.$filename,
            ]);
        }
        return redirect()->route('profilrw');
    }

    // Menampilkan halaman edit profil RW
    public function editProfilrw($id)
    {
        // Ambil data profil RW dari database
        $profilRW = ProfilRW::find($id);
        return view('profilrw.editprofil', compact('profilRW'));
    }

    // Mengupdate profil RW
    public function updateProfilrw($id, Request $request)
    {   $profilRW = ProfilRW::find($id);
        // Validasi input
        $request->validate([
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        // Ambil data profil RW dari database
        // $profilRW = ProfilRW::first();

        // Update deskripsi
        $profilRW->description = $request->description;

        // Jika ada foto yang diupload, simpan foto tersebut
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $path = 'uploads/profilrw/';

            // Hapus foto lama jika ada
            if ($profilRW->image && File::exists(public_path($profilRW->image))) {
                File::delete(public_path($profilRW->image));
            }

            $file->move(public_path($path), $filename);
            $profilRW->update(['image' => $path.$filename]);
        }

        // Simpan perubahan ke database
        $profilRW->save();

        // Redirect kembali ke halaman profil RW dengan pesan sukses
        return redirect('/admin/profilrw')->with('success', 'Profil RW berhasil diperbarui');
    }
}
