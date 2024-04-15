<?php

namespace App\Http\Controllers;

use App\Models\Surat_online;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
    public function gstore(Request $request){
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
                'status_surat'=>'menunggu',

            ]);
        }
        return view('suratonline.store');
    }

    public function admincreate()
    {
        return view('suratonline.admincreate');
    }

    //function store
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
        
        return redirect('/admin/suratonline');
    }

    //function edit
    public function edit($id){
        $surat_online = Surat_online::find($id);
        return view('suratonline.edit', compact (['surat_online']));
    }
    public function update($id, Request $request){
        $suratonline = Surat_online::find($id);

        if (!$suratonline) {
            // Return an error message if no surat_online was found with the given ID
            return redirect('/admin/suratonline')->with('error', 'No surat_online found with the given ID');
        }

        $request->validate([
            'dokumen' => 'mimes:png,jpg,jpeg,webp,pdf,docx'
        ]);

        if ($request->has('dokumen')) {

            $file = $request->file('dokumen');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/suratonline/';

            if($suratonline->dokumen && File::exists(public_path($suratonline->dokumen))) {
                File::delete(public_path($suratonline->dokumen));
            }

            $file->move($path, $filename);
            $suratonline->update(['dokumen' => $path.$filename]);
        }

        $suratonline->update([
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
        return redirect('/admin/suratonline');
    }
    public function destroy($id){
        $surat_online = Surat_online::find($id);
        $surat_online->delete();
        return redirect('/admin/suratonline');
    }
    
}    


