<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Major;
use App\Career;
use App\Uni_Major;
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

    public function search(Request $request){
        $query = $request['query'];
        // dd($query);
        $majors = Major::where('name', 'like', '%'.$query.'%')->get();
        // dd($majors);
        $careers = Career::where('jobtitle', 'like', '%'.$query.'%')->get();
        // $major = $majors->uni_majors()->first();
        // $uni_major = Uni_Major::where('major_id', '=', $majors->id);
        // dd($uni_major);
        return view('search', compact('majors', 'careers'));
    }
    public function filter(Request $request)
    {
        $query = $request['query'];
        $majors = Major::where('name', 'like', '%'.$query.'%')->get();
        // dd($majors);
        $careers = Career::where('jobtitle', 'like', '%'.$query.'%')->get();
        // $major = $majors->uni_majors()->first();
        // $uni_major = Uni_Major::where('major_id', '=', $majors->id);
        // dd($uni_major);
        return redirect()->route('/search', ['query' => $query]);
    }
    public function dashboard(){
        return view('dashboard');
    }
}

