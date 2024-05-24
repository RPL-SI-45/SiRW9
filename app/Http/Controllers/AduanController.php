<?php

namespace App\Http\Controllers;

use App\Models\Aduanwarga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AduanController extends Controller
{
    public function index()
    {
        $pengaduan_warga = Aduanwarga::all();
        return view('aduan.index', compact('pengaduan_warga'));
    }
    public function create()
    {
        return view('aduan.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'juduladuan' => 'required|string|max:255',
            'aduan' => 'required|string',
            'nama_pengadu' => 'required|string|max:255',
            'rt_pengadu' => 'required|string|max:255',
            'bukti_aduan' => 'required|mimes:png,jpg,jpeg,webp,pdf,docx|max:2048'
        ]);

        $bukti_aduan_path = null;

        if ($request->hasFile('bukti_aduan')) {
            $file = $request->file('bukti_aduan');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $path = 'uploads/aduanwarga/';
            $file->move(public_path($path), $filename);
            $bukti_aduan_path = $path.$filename;
        }

        Aduanwarga::create([
            'juduladuan' => $request->juduladuan,
            'aduan' => $request->aduan,
            'nama_pengadu' => $request->nama_pengadu,
            'rt_pengadu' => $request->rt_pengadu,
            'status_aduan' => $request->status_aduan,
            'bukti_aduan' => $bukti_aduan_path,
        ]);

        return redirect('/admin/pengaduanwarga')->with('success', 'Pengaduan warga berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengaduan_warga = Aduanwarga::find($id);

        if (!$pengaduan_warga) {
            return redirect('/admin/pengaduanwarga')->with('error', 'Pengaduan warga tidak ditemukan.');
        }

        return view('aduan.edit', compact('pengaduan_warga'));
    }

    public function update($id, Request $request)
    {
        $pengaduan_warga = Aduanwarga::find($id);

        if (!$pengaduan_warga) {
            return redirect('/admin/pengaduanwarga')->with('error', 'Pengaduan warga tidak ditemukan.');
        }

        $request->validate([
            'juduladuan' => 'required|string|max:255',
            'aduan' => 'required|string',
            'nama_pengadu' => 'required|string|max:255',
            'rt_pengadu' => 'required|string|max:255',
            'bukti_aduan' => 'nullable|mimes:png,jpg,jpeg,webp,pdf,docx|max:2048'
        ]);

        if ($request->hasFile('bukti_aduan')) {
            $file = $request->file('bukti_aduan');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $path = 'uploads/aduanwarga/';

            if ($pengaduan_warga->bukti_aduan && File::exists(public_path($pengaduan_warga->bukti_aduan))) {
                File::delete(public_path($pengaduan_warga->bukti_aduan));
            }

            $file->move(public_path($path), $filename);
            $pengaduan_warga->bukti_aduan = $path.$filename;
        }

        $pengaduan_warga->update([
            'juduladuan' => $request->juduladuan,
            'aduan' => $request->aduan,
            'nama_pengadu' => $request->nama_pengadu,
            'rt_pengadu' => $request->rt_pengadu,
            'status_aduan' => $request->status_aduan,
        ]);

        return redirect('/admin/pengaduanwarga')->with('success', 'Pengaduan warga berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pengaduan_warga = Aduanwarga::find($id);

        if ($pengaduan_warga) {
            if ($pengaduan_warga->bukti_aduan && File::exists(public_path($pengaduan_warga->bukti_aduan))) {
                File::delete(public_path($pengaduan_warga->bukti_aduan));
            }

            $pengaduan_warga->delete();
        }

        return redirect('/admin/pengaduanwarga')->with('success', 'Pengaduan warga berhasil dihapus.');
    }

    public function gcreate()
    {
        $aduan = Aduanwarga::all();
        return view('aduan.gcreate', compact(['aduan']));
    }
    public function gstore(Request $request)
    {
        $request->validate([
            'bukti_aduan' => 'mimes:png,jpg,jpeg,webp,pdf,docx'
        ]);
        if ($request->has('bukti_aduan')) {

            $file = $request->file('bukti_aduan');
            $extension = $file->getClientOriginalExtension();

            $filename = time() . '.' . $extension;

            $path = 'uploads/aduanwarga/';
            $file->move($path, $filename);

            Aduanwarga::create([
                'juduladuan'=>$request->juduladuan,
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
