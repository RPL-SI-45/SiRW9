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
    public function store(Request $request){
        // dd ($request->except(["_token"]));
        Surat_online::create($request->all());
        // Surat_online::create($request->except([['_token','submit']]));
        return redirect('/admin/suratonline');//kembali ke page surat_online
    }
    //function edit
    public function edit($id){
        $surat_online = Surat_online::find($id);
        return view('surat_online.edit', compact (['surat_online']));
    }
    
    public function update($id, Request $request){
        $surat_online = Surat_online::find($id);
        $surat_online->update($request->except(["_token", "_method"]));
        return redirect('/admin/suratonline');
    }

    public function destroy($id){
        $surat_online = Surat_online::find($id);
        $surat_online->delete();
        return redirect('/admin/surat_online');
    }
}
