<?php

namespace App\Http\Controllers;

use App\Models\Aduanwarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AduanController extends Controller
{
    public function index()
    {
        $aduan = Aduanwarga::all();
        return view('aduan.index', compact(['aduan']));
    }
    public function create()
    {
        $aduan = Aduanwarga::all();
        return view('aduan.create', compact(['aduan']));
    }
    public function gstore(Request $request)
    {
        $request->validate([
            'bukti_aduan' => 'mimes:png,jpg,jpeg,webp'
        ]);
        if ($request->has('bukti_aduan')) {

            $file = $request->file('bukti_aduan');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/aduanwarga/';
            $file->move($path, $filename);

            Aduanwarga::create([
                'aduan' => $request->aduan,
                'nama_pengadu' => $request->nama_pengadu,
                'rt_pengadu' => $request->rt_pengadu,
                'status_aduan' => 'menunggu',
                'bukti_aduan' => $request->bukti_aduan
            ]);
        }

        return view('aduan.store');
    }
}
