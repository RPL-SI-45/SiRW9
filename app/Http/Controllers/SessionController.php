<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    // Form email dan password
    function index() {
        return view('sesi/index');
    }

    // Authentikasi email dan password
    function login(Request $request)
    {
        // Set flash data to preserve the email input
        Session::flash('email', $request->email);

        // Validasi email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (auth()->attempt($infologin)) {
            return redirect('/admin/data-penduduk')->with('success', 'Berhasil Login'); 
        } else {
            return redirect('/login')->with('pesan', 'Email atau password salah');
        }
    }
}
