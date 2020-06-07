<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::all();
        
        return view('profile.index', ['profiles' => $profile]);
    }
}
