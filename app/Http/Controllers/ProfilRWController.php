<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilRW;

class ProfilRWController extends Controller
{
    // Menampilkan halaman profil RW
    public function profilrw()
    {
        // Ambil data profil RW dari database (misal menggunakan model ProfilRW)
        $profilRW = ProfilRW::first();
        return view('profilrw.index', compact('profilRW'));
    }

    // Menampilkan halaman edit profil RW
    public function editProfilrw()
    {
        // Ambil data profil RW dari database
        $profilRW = ProfilRW::first();
        return view('profilrw.edit', compact('profilRW'));
    }

    // Mengupdate profil RW
    public function updateProfilrw(Request $request)
    {
        // Validasi input
        $request->validate([
            'description' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Ambil data profil RW dari database
        $profilRW = ProfilRW::first();

        // Update deskripsi
        $profilRW->description = $request->description;

        // Jika ada foto yang diupload, simpan foto tersebut
        if ($request->hasFile('photo')) {
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images'), $imageName);
            $profilRW->photo = $imageName;
        }

        // Simpan perubahan ke database
        $profilRW->save();

        // Redirect kembali ke halaman profil RW dengan pesan sukses
        return redirect('/admin/profilrw')->with('success', 'Profil RW berhasil diperbarui');
    }
}
