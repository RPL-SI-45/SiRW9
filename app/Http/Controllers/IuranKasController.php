<?php

namespace App\Http\Controllers;

use App\Models\Iurankas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IuranKasController extends Controller
{
    public function index(){
        $iurankas = Iurankas::all();
        return view('iurankas.index',compact(['iurankas']));
    }

    public function create(){
        return view ('iurankas.create');
    }

    public function store(Request $request){
        $request->validate([
            'Bukti_Pembayaran' => 'mimes:png,jpg,jpeg,webp'
        ]);

        if ($request->has('Bukti_Pembayaran')) {

            $file = $request->file('Bukti_Pembayaran');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/iurankas/';
            $file->move($path, $filename);

            Iurankas::create([
                'Nama_Lengkap' => $request->Nama_Lengkap,
                'Alamat' => $request->Alamat,
                'RT' => $request->RT,
                'Tanggal_Bayar' => $request->Tanggal_Bayar,
                'Nomor_Rekening' => $request->Nomor_Rekening,
                'Nama_Pengirim' => $request->Nama_Pengirim,
                'Bukti_Pembayaran' => $path.$filename,
                'Status_Pembayaran' => $request->Status_Pembayaran
            ]);
        }

        return redirect('/admin/iurankas');
    }

    public function edit($id){
        $iurankas = Iurankas::find($id);
        return view('iurankas.edit', compact(['iurankas']));
    }

    public function update($id, Request $request){
        $iurankas = Iurankas::find($id);
        $request->validate([
            'Bukti_Pembayaran' => 'mimes:png,jpg,jpeg,webp'
        ]);

        if ($request->has('Bukti_Pembayaran')) {

            $file = $request->file('Bukti_Pembayaran');
            $extension = $file->getClientOriginalExtension();

            $filename = time().'.'.$extension;

            $path = 'uploads/iurankas/';

            if($iurankas->Bukti_Pembayaran && File::exists(public_path($iurankas->Bukti_Pembayaran))) {
                File::delete(public_path($iurankas->Bukti_Pembayaran));
            }

            $file->move($path, $filename);
            $iurankas->update(['Bukti_Pembayaran' => $path.$filename]);
        }

        $iurankas->update([
            'Nama_Lengkap' => $request->Nama_Lengkap,
            'Alamat' => $request->Alamat,
            'RT' => $request->RT,
            'Tanggal_Bayar' => $request->Tanggal_Bayar,
            'Nomor_Rekening' => $request->Nomor_Rekening,
            'Nama_Pengirim' => $request->Nama_Pengirim,
            'Status_Pembayaran' => $request->Status_Pembayaran
        ]);

        return redirect('/admin/iurankas');

    }

    public function destroy($id) {
        $iurankas = Iurankas::find($id);
        $iurankas->delete();
        return redirect('/admin/iurankas');
    }

    public function bayar()
    {
        return view('iurankas.bayar');
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'Bukti_Pembayaran' => 'mimes:png,jpg,jpeg,webp'
        ]);

        if ($request->has('Bukti_Pembayaran')) {

            $file = $request->file('Bukti_Pembayaran');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/iurankas/';
            $file->move($path, $filename);

            Iurankas::create([
                'Nama_Lengkap' => $request->Nama_Lengkap,
                'Alamat' => $request->Alamat,
                'RT' => $request->RT,
                'Tanggal_Bayar' => $request->Tanggal_Bayar,
                'Nomor_Rekening' => $request->Nomor_Rekening,
                'Nama_Pengirim' => $request->Nama_Pengirim,
                'Bukti_Pembayaran' => $path . $filename,
                'Status_Pembayaran' => 'Belum Lunas',
            ]);
        }

        return view('iurankas.store');
    }
}
