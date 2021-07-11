<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function view_riasec_assessment(){
        return view('riasec-assessment'); 
    }
}
