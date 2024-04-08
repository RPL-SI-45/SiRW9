<?php

namespace App\Http\Controllers;
use App\Models\Surat_online;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    public function index()
    {
        $surat = Surat_online::all();
        return view('suratonline.index', compact('surat'));
        // dd($surat);
    }
    public function create()
    {
        return view('suratonline.create');
    }
    //////////////////////////////////////////
    // public function store(Request $request){
    //     // dd ($request->except(["_token"]));
    //     Surat_online::create($request->all());
    //     // Surat_online::create($request->except([['_token','submit']]));
    //     return redirect('/admin/suratonline');//kembali ke page surat_online
    // }
    //function edit
    public function edit($id){
        $surat_online = Surat_online::find($id);
        return view('suratonline.edit', compact (['surat_online']));
    }
    
    public function update($id, Request $request){
        $surat_online = Surat_online::find($id);
        $surat_online->update($request->except(["_token", "_method"]));
        return redirect('/admin/suratonline');
    }

    public function destroy($id){
        $surat_online = Surat_online::find($id);
        $surat_online->delete();
        return redirect('/admin/suratonline');
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
        
        return redirect('/admin/suratonline');
    }
}
    // public function store(Request $request){
    //     $request->validate([
    //         'dokumen' => 'mimes:png,jpg,jpeg,webp'
    //     ]);

    //     if ($request->has('dokumen')) {

    //         $file = $request->file('dokumen');
    //         $extension = $file->getClientOriginalExtension();

    //         $filename = time().'.'.$extension;

    //         $path = 'uploads/suratonline/';
    //         $file->move($path, $filename);
    //         SuratController::create([
    //             'nama_lengkap' => $request->nama_lengkap,
    //             'nik' => $request->nik,
    //             'keperluan' => $request->keperluan,
    //             'jenis_surat' => $request->jenis_surat,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'umur' => $request->umur,
    //             'status' => $request->status,
    //             'agama' => $request->agama,
    //             'jenis_kelamin' => $request->jenis_kelamin,
    //             'pekerjaan' => $request->pekerjaan,
    //             'dokumen' => $path.$filename,
    //             'status_surat' => $request->status_surat
    //         ]);
    //     }
    //     return redirect('/admin/suratonline');
        
        // 'Nama_Lengkap' => $request->Nama_Lengkap,
        // 'Alamat' => $request->Alamat,
        // 'RT' => $request->RT,
        // 'Tanggal_Bayar' => $request->Tanggal_Bayar,
        // 'Nomor_Rekening' => $request->Nomor_Rekening,
        // 'Nama_Pengirim' => $request->Nama_Pengirim,
        // 'Bukti_Pembayaran' => $path.$filename,
        // 'Status_Pembayaran' => $request->Status_Pembayaran
