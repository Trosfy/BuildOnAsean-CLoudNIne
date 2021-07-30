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
       
        if(Auth::user()){
            $user = DB::table('users')->where('id', '=', Auth::user()->id)->first(); 

            $output = NULL;
            $career_recommendation = NULL;

            if (is_null($user->riasec) and is_null($user->api_result)) {
                return view('landing');

            } else {
                if(!is_null($user->riasec)){
                    $riasec_code = DB::table('users')->select('riasec')->where('id', '=', Auth::user()->id)->first(); 
                    // dd($riasec_code); 
    
                    $needle = $riasec_code->riasec; 
    
                    $careers = DB::table('careers')->get();
                    $riasec_code_career = array(); 
                    foreach ($careers as $career) {
                        $riasec = ""; 
                        if($career->r == 1){
                            $riasec .= 'R';
                        } 
                        if ($career->i == 1){
                            $riasec .= 'I';
                        } 
                        if ($career->a == 1){
                            $riasec .= 'A';
                        } 
                        if ($career->s == 1){
                            $riasec .= 'S'; 
                        } 
                        if ($career->e == 1){
                            $riasec .= 'E'; 
                        } 
                        if ($career->c == 1){
                            $riasec .= 'C'; 
                        }
                        array_push($riasec_code_career, $riasec);   
                    }
    
                    // print_r($riasec_code_career); 
    
                    // Ngitung persamaan antara RIASEC code result & RIASEC code hasil
                    // e.g. result = IAS
                    // carreer = RIS
                    // $similarity_countnya jadi 2
                    $similarity_count = array();
                    for ($i = 0; $i < count($riasec_code_career) ; $i++) { 
                        $count = strlen($needle) - strlen(str_replace(str_split($riasec_code_career[$i]), '', $needle));
                        array_push($similarity_count, $count);
                    }
                    // print_r($similarity_count);
    
                    // Sort berdasarkan jumlah similarity count
                    // one, two, three itu similarity count
                    // recommend1, 2, 3 itu index careernya (tp start dri 0, di db start dri 1 jd ntar diakhir +1)
                    $one = $two = $three = PHP_INT_MIN; 
                    $recommend1 = $recommend2 = $recommend3 = ""; 
                    for($i = 0; $i < count($similarity_count) ; $i++){
                        if($similarity_count[$i] > $one){
                            $three = $two; 
                            $recommend3 = $recommend2; 
                            $two = $one;
                            $recommend2 = $recommend1; 
                            $one = $similarity_count[$i];
                            $recommend1 = $i;  
                        } else if ($similarity_count[$i] > $two){
                            $three = $two;
                            $recommend3 = $recommend2; 
                            $two = $similarity_count[$i];
                            $recommend2 = $i;
                        } else if($similarity_count[$i] > $three){
                            $three = $similarity_count[$i]; 
                            $recommend3 = $i; 
                        }
                    }
    
                    $career_recommendation = DB::table('careers')->join('majors', 'majors.id', '=', 'careers.major_id')->where('careers.id', "=", $recommend1+1)->orWhere('careers.id', '=', $recommend2+1)->orWhere('careers.id', '=', $recommend3+1)->select('*','careers.id as career_id', 'careers.img as career_img', 'majors.trans-name AS trans_name')->get(); 
    
                    // dd($career_recommendation); 
                } 
                if (!is_null($user->api_result)) {
                    $majors = DB::table('users')->select('api_result')->where('id', '=', Auth::user()->id)->first();
    
                    $majors = $majors->api_result;
    
                    $jurusan = DB::table('users')->select('jurusan')->where('id', '=', Auth::user()->id)->first();
    
                    $jurusan = $jurusan->jurusan;
    
                    $budget = DB::table('users')->select('budget')->where('id', '=', Auth::user()->id)->first(); 
                    
                    $budget = $budget->budget; 
    
                    $major_result = explode(',', $majors);
    
                    // Filter sesuai budget dan jurusan 
                    if($jurusan == 'IPA'){
                        $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS university_name' , 'majors.trans-name AS trans_name', 'majors.name', 'uni_majors.budget', 'majors.stream-science AS stream_science', 'majors.stream-social AS stream_social', 'majors.description', 'majors.id', 'majors.img')->where('budget', '<=', $budget)->where('stream-science', '=', 1)->orderBy('budget')->get();
                    } else {
                        $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS university_name' , 'majors.trans-name AS trans_name', 'majors.name', 'uni_majors.budget','majors.stream-science AS stream_science', 'majors.stream-social AS stream_social', 'majors.description', 'majors.id', 'majors.img')->where('budget', '<=', $budget)->where('stream-social', '=', 1)->orderBy('budget')->get();
                    }
                
                    // Filter sesuai result 
                    $hasil_persamaan_major = array(); 
                    for ($i=0; $i < count($major_result) ; $i++) { 
                        for ($j=0; $j < count($data) ; $j++) { 
                            if($major_result[$i] == $data[$j]->name){
                                array_push($hasil_persamaan_major, $data[$j]);
                            }
                        }
                    }
    
                    $hasil = array(); 
                    $other_unis = ""; 
                    array_push($hasil, $hasil_persamaan_major[0]);
                    for ($i=1; $i < count($hasil_persamaan_major); $i++) { 
                        // if(count($hasil) == 4){
                        //     // break; 
                        // }
    
                        if($hasil[count($hasil)-1]->name != $hasil_persamaan_major[$i]->name){
                            $other_unis = rtrim($other_unis, ", "); 
                            $hasil[count($hasil)-1]->other_major = $other_unis; 
                            array_push($hasil, $hasil_persamaan_major[$i]);
                             $other_unis = "";
                         } else {
                             $other_unis .= $hasil_persamaan_major[$i]->university_name . ", ";
                         }
                     }
                    
                    $output = array_slice($hasil, 0, 3);
                    }
                // $output = array_slice($hasil_persamaan_major, 0, 3);

                // dd($hasil);

                $hasil_gabungan = NULL;
                if($career_recommendation != NULL){
                    $hasil_gabungan = array();
                    foreach($career_recommendation as $career){
                        for ($i=0; $i < count($hasil) ; $i++) { 
                            if($career->major_id == $hasil[$i]->id){
                                array_push($hasil_gabungan, $hasil[$i]); 
                            }
                        }
                    }
                }

                // dd($hasil_gabungan);

                return view('dashboard', ['hasil_gabungan' => $hasil_gabungan, 'major_recommendation' => $output]);
            }
        } else 
            return view('landing');
    }

    public function about(){
        return view('about');
    }

    public function search(Request $request){
        $query = $request['query'];
        // dd($query);
        $majors = Major::where('name', 'like', '%'.$query.'%')->orWhere('trans-name', 'like', '%'.$query.'%')->get();
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
        $majors = Major::where('name', 'like', '%'.$query.'%')->orWhere('trans-name', 'like', '%'.$query.'%')->get();
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

