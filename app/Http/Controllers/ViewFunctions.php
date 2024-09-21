<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewFunctions extends Controller
{
    public function profile(){
        return view('user.profile');
    }

    public function HomeButton(){
        return view('dashboard');
    }
}
