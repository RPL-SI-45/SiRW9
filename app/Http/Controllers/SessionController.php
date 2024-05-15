<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //form email dan password
    function index() {
        return view('sesi/index');
    }

    //authentikasi email dan password
    function login(Request $request){
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
            return 'berhasil login';
        } else {
            return 'gagal login';
        }
    }
}
