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
            'Aduan' =>$request->Aduan,
            'Nama_Pengadu' =>$request->Nama_Pengadu,
            'RT_Pengadu' =>$request->RT_Pengadu,
            'StatusAduan' =>$request->StatusAduan,
            'Bukti_Aduan' =>$request->Bukti_Aduan,
        ]);
        return redirect('/admin/pengaduanwarga');
    }
    public function destroy($id){
        $pengaduan_warga = pengaduan::find($id);
        $pengaduan_warga->delete();
        return redirect('/admin/pengaduanwarga');
    }
}