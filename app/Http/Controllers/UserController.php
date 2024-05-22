<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function accountSettings()
    {
        $user = Auth::user();
        return view('admin.account-settings', compact('user'));
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match']);
        }

        $user->password = Hash::make($request->new_password);
        if ($user instanceof User) {
            $user->save();
        }

        return back()->with('success', 'Password successfully changed');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
