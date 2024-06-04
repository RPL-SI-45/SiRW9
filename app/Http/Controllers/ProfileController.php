<?php

namespace App\Http\Controllers;

use App\Models\profilerw;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $profile = profilerw::all();
        return view('profile.index',compact(['profile']));
    }
}
