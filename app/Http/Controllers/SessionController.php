<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    //form email dan password
    function index() {
        return view('sesi/index');
    }

    //authentikasi email dan password
    function login(Request $request)
    {
        Session::flash('email', $request->email);
        //validasi email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email harus diisi',
            // 'email.email' => 'Email tidak valid',
            'password.required' => 'Password harus diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($infologin)) {
            return redirect ('/admin/data-penduduk') ->with('success','berhasil login'); 
        } else {
            return redirect('/sesi')->withErrors('pesan', 'Email atau password salah');
        }
    }
}
