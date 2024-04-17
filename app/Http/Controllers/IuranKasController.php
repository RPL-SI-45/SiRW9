<?php

namespace App\Http\Controllers;

use App\Models\Iurankas;
use Illuminate\Http\Request;

class IuranKasController extends Controller
{

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
