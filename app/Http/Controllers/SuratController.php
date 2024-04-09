<?php

namespace App\Http\Controllers;

use App\Models\Surat_online;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index(){
        $surat_online = Surat_online::all();
        return view('suratonline.index', compact(['surat_online']));
    }
    public function create(){
        $surat_online = Surat_online::all();
        return view('suratonline.create', compact(['surat_online']));
    }
    public function store(Request $request){
        $request->validate([
            'dokumen' => 'mimes:png,jpg,jpeg,webp,pdf,docx'
        ]);

        if ($request->has('dokumen')) {

            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/suratonline/';
            $file->move($path, $filename);

            Surat_online::create([
                'nama_lengkap' => $request->nama_lengkap,
                'nik' => $request->nik,
                'keperluan' => $request->keperluan,
                'jenis_surat' => $request->jenis_surat,
                'tanggal_lahir' => $request->tanggal_lahir,
                'umur' => $request->umur,
                'status' => $request->status,
                'agama' => $request->agama,
                'jenis_kelamin' => $request->jenis_kelamin,
                'pekerjaan' => $request->pekerjaan,
                'dokumen' => $path.$filename,
                'status_surat' => $request->status_surat
            ]);
        }
        return redirect('/suratonline/store');
    }
}    


