<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MajorController extends Controller
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

        $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description')->orderBy('major_name', 'asc')->get(); 

        return view('major.majors-list', ['majors' => $majors]);
    }
    public function filter(Request $request){
        // dd($request);
        if($request->sort != 'best')
        {
            if($request->rType == 'all')
            {
                $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description')->orderBy('majors.name', $request->sort)->orderBy('budget', $request->sort)->get(); 
            }else
            {
                if($request->rType = 'IPA')
                    $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description')->where('majors.stream-science', '=', 1)->orderBy('majors.name', $request->sort)->orderBy('budget', $request->sort)->get(); 
                else
                    $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description')->where('majors.stream-social', '=', 1)->orderBy('majors.name', $request->sort)->orderBy('budget', $request->sort)->get(); 
            }
            
        }
        else
        {
            //best match
        }
        session()->flashInput($request->input());
        // $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description')->get(); 

        return view('major.majors-list', ['majors' => $majors]);
    }
    public function show($id)
    {
        //
        return view('major.major-details');

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
