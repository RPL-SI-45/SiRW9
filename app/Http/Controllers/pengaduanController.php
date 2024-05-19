<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class pengaduanController extends Controller
{
    public function index()
    {
        $pengaduan_warga = pengaduan::all();
        return view('pengaduanwarga.index', compact('pengaduan_warga'));
    }
    
    public function create()
    {
        return view('pengaduanwarga.create');
    }

    public function edit($id)
    {
        $pengaduan_warga = pengaduan::find($id);
        return view('pengaduanwarga.edit', compact('pengaduan_warga'));
    }
    public function update($id, Request $request){
        $pengaduan_warga = pengaduan::find($id);

        if (!$pengaduan_warga) {
            // Return an error message if no surat_online was found with the given ID
            return redirect('/admin/pengaduanwarga')->with('error', 'No pengaduan_warga found with the given ID');
        }

        $request->validate([
            'dokumen' => 'mimes:png,jpg,jpeg,webp,pdf,docx'
        ]);

        if ($request->has('dokumen')) {

            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/pengaduanwarga/';

            if($pengaduan_warga->dokumen && File::exists(public_path($pengaduan_warga->dokumen))) {
                File::delete(public_path($pengaduan_warga->dokumen));
            }

            $file->move($path, $filename);
            $pengaduan_warga->update(['dokumen' => $path.$filename]);
        }

        $pengaduan_warga->update([
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
            'status_surat' => $request->status_surat
        ]);
        return redirect('/admin/pengaduanwarga');
    }
    public function destroy($id){
        $surat_online = pengaduan::find($id);
        $surat_online->delete();
        return redirect('/admin/pengaduanwarga');
    }
}