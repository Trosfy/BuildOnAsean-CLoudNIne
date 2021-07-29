<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Career;
use App\Major;

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


        $majors = Major::orderBy('trans-name')->get();
        $careers = DB::table('careers')->join('majors', 'careers.major_id', '=', 'majors.id')->select('careers.id','jobtitle', 'majors.name AS major_name', 'major_id','overview', 'careers.img','majors.trans-name AS trans_name')->orderBy('jobtitle', 'asc')->paginate(5);
        return view('career.careers-list', compact('careers', 'majors'));
    }

    public function filter(Request $request)
    {
        // dd($request->rType);
        $majors = Major::orderBy('trans-name')->get();
        if($request->sort != 'best')
        {
            if($request->rType == 'all')
            {
                $careers = DB::table('careers')->join('majors', 'careers.major_id', '=', 'majors.id')->select('major_id','careers.id','jobtitle', 'majors.name AS major_name', 'overview', 'careers.img','majors.trans-name AS trans_name')->orderBy('jobtitle', $request->sort)->paginate(5);
                // $careers = Career::orderBy('jobtitle', $request->sort)->get();
                
            }else
            {
                $careers = DB::table('careers')->join('majors', 'careers.major_id', '=', 'majors.id')->select('major_id','careers.id','jobtitle', 'majors.name AS major_name', 'overview', 'careers.img','majors.trans-name AS trans_name')->where('majors.name', '=', $request->rType)->orderBy('jobtitle', $request->sort)->paginate(5);
                // $majors = Major::where('name', '=', $request->rType)->get();
                // $careers = Career::find(1)->major();
                // $careers = Career::with(['major' => function($query) use ( $request ){
                //     $query->where('name', '=', $request->rType);
                // }])->orderBy('jobtitle', $request->sort)->get();
                // $careers = Major::where('name', '=', $request->rType)->with(['careers' => function($query) use ( $request ){
                //     $query->orderBy('jobtitle', $request->sort);
                // }])->get();
            }
            
        }
        else
        {
            //best match
        }
        // dd($careers);
        session()->flashInput($request->input());
        // dd($careers);
        return view('career.careers-list', compact('careers','majors'));
    }
    public function show($id)
    {
        //
        $career = Career::find($id);
        $major = Major::find($career->major_id);
        return view('career.career-details', compact('career','major'));

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
