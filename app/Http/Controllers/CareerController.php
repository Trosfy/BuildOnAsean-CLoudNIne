<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showAll(){


        $majors = DB::table('majors')->orderBy('name')->get();
        $careers = DB::table('careers')->join('majors', 'careers.major_id', '=', 'majors.id')->select('careers.id','jobtitle', 'majors.name AS major_name', 'overview')->orderBy('jobtitle', 'asc')->paginate(5);
        return view('career.careers-list', compact('careers', 'majors'));
    }

    public function filter(Request $request)
    {
        // dd($request->rType);
        $majors = DB::table('majors')->orderBy('name')->get();
        if($request->sort != 'best')
        {
            if($request->rType == 'all')
            {
                $careers = DB::table('careers')->join('majors', 'careers.major_id', '=', 'majors.id')->select('careers.id','jobtitle', 'majors.name AS major_name', 'overview')->orderBy('jobtitle', $request->sort)->paginate(5);
            }else
            {
                $careers = DB::table('careers')->join('majors', 'careers.major_id', '=', 'majors.id')->select('careers.id','jobtitle', 'majors.name AS major_name', 'overview')->where('majors.name', '=', $request->rType)->orderBy('jobtitle', $request->sort)->paginate(5);
            }
            
        }
        else
        {
            //best match
        }
        
        session()->flashInput($request->input());
        // dd($careers);
        return view('career.careers-list', compact('careers','majors'));
    }
    public function show($id)
    {
        //
        return view('career.career-details');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
