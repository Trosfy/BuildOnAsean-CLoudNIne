<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    //
    public function landing() {
       
        if(Auth::user())
            return view('dashboard');
        else 
            return view('landing');
    }

    public function about(){
        return view('about');
    }

    public function search(){
        return view('search');
    }
    public function dashboard(){
        return view('dashboard');
    }
}

