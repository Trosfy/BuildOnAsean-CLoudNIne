<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description', 'majors.id', 'majors.img','majors.trans-name AS trans_name')->orderBy('major_name', 'asc')->orderBy('budget', 'asc')->paginate(5);

        return view('major.majors-list', ['majors' => $majors]);
    }
    public function filter(Request $request){
        // dd($request);
        if($request->sort != 'best')
        {
            if($request->rType == 'all')
            {
                $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description', 'majors.id', 'majors.img','majors.trans-name AS trans_name')->orderBy('majors.name', $request->sort)->orderBy('budget', $request->sort)->paginate(5);
                // dd($majors);
            }else
            {
                if($request->rType == 'IPA')
                    $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description', 'majors.id', 'majors.img','majors.trans-name AS trans_name')->where('majors.stream-science', '=', 1)->orderBy('majors.name', $request->sort)->orderBy('budget', $request->sort)->paginate(5); 
                else
                    $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description', 'majors.id', 'majors.img','majors.trans-name AS trans_name')->where('majors.stream-social', '=', 1)->orderBy('majors.name', $request->sort)->orderBy('budget', $request->sort)->paginate(5);
            }
            
        }
        else
        {
            //best match
            $majors = Auth::user()->api_result;
            $major_result = explode(',', $majors);

            // dd($request->rType);
            // Filter sesuai budget dan jurusan 
            if($request->rType == 'IPA'){
                $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description','majors.id', 'majors.img','majors.trans-name AS trans_name')->where('stream-science', '=', 1)->orderBy('budget')->get();
            } else if($request->rType == 'IPS'){
                $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description','majors.id', 'majors.img','majors.trans-name AS trans_name')->where('stream-social', '=', 1)->orderBy('budget')->get();
            }else
                $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description','majors.id', 'majors.img','majors.trans-name AS trans_name')->orderBy('budget')->get();
            
            // Filter sesuai result 
            $hasil_persamaan_major = array(); 
            for ($i=0; $i < count($major_result) ; $i++) { 
                for ($j=0; $j < count($data) ; $j++) { 
                    if($major_result[$i] == $data[$j]->major_name){
                        array_push($hasil_persamaan_major, $data[$j]);
                    }
                }
            }
            // dd($hasil_persamaan_major);
            $majors = $hasil_persamaan_major;
            // dd($majors);
        }
        session()->flashInput($request->input());
        // $majors = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS uni_name', 'majors.name AS major_name','uni_majors.budget', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social','majors.description')->get(); 

        return view('major.majors-list', ['majors' => $majors]);
    }
    public function show($id)
    {
        $details = DB::table('majors')->join('uni_majors', 'uni_majors.major_id', '=', 'majors.id')->join('universities', 'uni_majors.university_id', '=', 'universities.id')->join('careers', 'careers.major_id', '=', 'majors.id')->select('majors.name AS major_name', 'majors.stream-science AS stream_science','majors.stream-social AS stream_social', 'uni_majors.budget', 'careers.jobtitle as career_name', 'careers.overview', 'careers.id as career_id', 'careers.jobdesc', 'majors.description','careers.img','majors.trans-name AS trans_name')->where('majors.id', '=', $id)->orderBy('uni_majors.budget')->first(); 
        // dd($details); 

        $other_career_prospects = DB::table('majors')->join('careers', 'careers.major_id', '=', 'majors.id')->select('careers.id', 'careers.jobtitle', 'careers.overview', 'majors.name', 'careers.img','majors.trans-name AS trans_name')->where('majors.id', '=', $id)->get();
        // $other_career_prospects =  $other_career_prospects->slice(1);
        // dd($other_career_prospects);

        $universities = DB::table('universities')->join('uni_majors', 'uni_majors.university_id', '=', 'universities.id')->where('uni_majors.major_id', '=', $id)->orderBy('uni_majors.budget')->get();
        // dd($universities); 

        // dd($universities); 
        return view('major.major-details', ['details' => $details, 'universities' => $universities, 'other_career_prospects' => $other_career_prospects]);
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
