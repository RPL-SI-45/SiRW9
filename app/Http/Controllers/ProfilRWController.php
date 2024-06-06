<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilRW;
use Illuminate\Support\Facades\File;

class ProfilRWController extends Controller
{
    // Menampilkan halaman profil RW
    public function index()
    {
        $profilRW = ProfilRW::first();
        return view('profilrw.index', compact('profilRW'));
    }

    // Menampilkan form create
    public function create()
    {
        return view('profilrw.create');
    }

    // Menyimpan data profil RW
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        ProfilRW::create([
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect()->route('profilrw.index')->with('success', 'Profil RW created successfully.');
    }
}
