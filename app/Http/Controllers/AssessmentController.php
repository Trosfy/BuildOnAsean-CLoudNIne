<?php

namespace App\Http\Controllers;

use App\RiasecQuestion;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use lluminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class AssessmentController extends Controller
{

    function __construct()
    {
        $this->jurusan = "";

        $this->score_array = array(); 

        $this->budget = 0;
    }

    

    public function view_riasec_assessment_page(){
        $questions = RiasecQuestion::paginate(5);

        return view('riasec-assessment', ['questions' => $questions]); 
        
    }

    public function get_risec_result(Request $request){
        // foreach($_POST['checked'] as $item){
        //     $result[] = {0}; 
        //     if($item=='R'){
        //         $result += 1; 
        //     }
        //     return view('riasec-assessment', ['questions' => $questions]);
        // }
        $x = $request->all();
        // dd($request->all());
        // $checked = $request->input('checked');

        

        $result = array(); 
        $countR = 0;
        $countI = 0; 
        $countA = 0;
        $countS = 0;
        $countE = 0;
        $countC = 0; 
        $first = $second = $third = PHP_INT_MIN; 
        $top1 = $top2 = $top3 = PHP_INT_MIN; 
        foreach($x as $check){
            if($check == 'R'){
                $countR += 1; 
            } else if ($check == 'I'){
                $countI += 1; 
            } else if ($check == 'A'){
                $countA += 1; 
            } else if ($check == 'S'){
                $countS += 1; 
            } else if ($check == 'E'){
                $countE += 1; 
            } else if ($check == 'C'){
                $countC += 1; 
            }
        }

        array_push($result, $countR, $countI, $countA, $countS, $countE, $countC); 
        $arr_size = count($result);

        // dd($countR, $countI, $countA, $countS, $countE, $countC); 

        for($i = 0; $i < $arr_size ; $i++){
            if($result[$i] > $first){
                $third = $second; 
                $top3 = $top2; 
                $second = $first;
                $top2 = $top1; 
                $first = $result[$i];
                $top1 = $i;  
            } else if ($result[$i] > $second){
                $third = $second;
                $top3 = $top2; 
                $second = $result[$i];
                $top2 = $i;
            } else if($result[$i] > $third){
                $third = $result[$i]; 
                $top3 = $i; 
            }
            
            // print("Iteration: $i\n"); 
            // print("First: $first Top1 index:$top1\n");
            // print("Second: $second Top2 index: $top2\n");
            // print("Third: $third Top3 index: $top3\n");
        }

        // dd($first, $second, $third, $top1, $top2, $top3); 
        // dd($top1, $top2, $top3);

        if($top1 == 0){
            $top1 = 'R'; 
        } else if($top1 == 1){
            $top1 = 'I'; 
        } else if($top1 == 2){
            $top1 = 'A'; 
        } else if($top1 == 3){
            $top1 = 'S'; 
        } else if($top1 == 4){
            $top1 = 'E'; 
        } else if($top1 == 5){
            $top1 = 'C'; 
        }

        if($top2 == 0){
            $top2 = 'R'; 
        } else if($top2 == 1){
            $top2 = 'I'; 
        } else if($top2 == 2){
            $top2 = 'A'; 
        } else if($top2 == 3){
            $top2 = 'S'; 
        } else if($top2 == 4){
            $top2 = 'E'; 
        } else if($top2 == 5){
            $top2 = 'C'; 
        }

        if($top3 == 0){
            $top3 = 'R'; 
        } else if($top3 == 1){
            $top3 = 'I'; 
        } else if($top3 == 2){
            $top3 = 'A'; 
        } else if($top3 == 3){
            $top3 = 'S'; 
        } else if($top3 == 4){
            $top3 = 'E'; 
        } else if($top3 == 5){
            $top3 = 'C'; 
        }

        // $tops = array();
        // array_push($tops, $top1, $top2, $top3); 
        // // dd($tops); // Code in array, i.e., I, A, S


        // // Append RIASEC code result jadi string
        $quizresult = $top1.$top2.$top3;
        // print($quizresult);

        // print(Auth::user()->id);
        DB::table('users')->where('id', '=', Auth::user()->id)->update([
            'riasec' => $quizresult
        ]);

        // return redirect()->action('showResult');
        return redirect()->action([AssessmentController::class, 'showResult']);
    }

    public function showResult(){
        // $tops = array();

        // return view('riasec-result', ['tops' => $tops]);

        $quizresult= DB::table('users')->where('id', '=', Auth::user()->id)->select('riasec')->get();
        // print($quizresult);
        // Append RIASEC code dari career
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
            $count = strlen($quizresult) - strlen(str_replace(str_split($riasec_code_career[$i]), '', $quizresult));
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
        // print($recommend1);
        // print($recommend2);
        // print($recommend3);

        // Ambil dari db berdasarkan index 
        $career_recommendation = DB::table('careers')->join('majors', 'majors.id', '=', 'careers.major_id')->where('careers.id', "=", $recommend1+1)->orWhere('careers.id', '=', $recommend2+1)->orWhere('careers.id', '=', $recommend3+1)->select('*','careers.id as career_id', 'careers.img as career_img')->get();
        // dd($career_recommendation); 

        return view('career-assessment.career-assessment-result', ['quizresult' => $quizresult, 'career_recommendation' => $career_recommendation]); 
    }

    public function majorAssessment(){

        return view('uni-assessment.uni-assessment');
    }

    public function majorAssessment1(){

        return view('uni-assessment.uni-assessment-1');
    }

    public function majorAssessment1save (Request $request){
        //test data
        // $test_data = array(
        //     'data' => "78,78,93,93,93,83,83,83,83,93,78,78,78,78,78,83,83,88,88,78,78,78,78,78,78,78,78,83,83,83,78,78,88,88,93,79.24305051,79.87593939,79.7976569,80.3623431,82.44420502,0,0,0,0,0,83,83,83,83,88,98,98,93,93,93,1,0",
        //  );
        //  $url = "https://jojbix5rak.execute-api.us-east-1.amazonaws.com/test/predict-major";
        //  $client = new \GuzzleHttp\Client();
        //  $response = $client->post($url, [
        //      'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
        //      'body'    => json_encode($test_data)
        //  ]); 
        //  print_r(json_decode($response->getBody(), true));

        session()->put('jurusan', $request->jurusan);
        // $this->majorAssessment2($request->jurusan);
        return redirect()->action([AssessmentController::class, 'majorAssessment2']);
        
    }

    public function majorAssessment2(){
        $jurusan = session()->get('jurusan');
        return view('uni-assessment.uni-assessment-2-ipa', ['jurusan' => $jurusan]);
    }

    public function majorAssessment2save(Request $request){
        // $score_array[] = $request->grademat1;
        $jurusan = session()->get('jurusan');
        if($jurusan == 'IPA'){
            $score_array = array($request->grademat1, $request->grademat2, $request->grademat3, $request->grademat4, $request->grademat5, $request->gradebing1, $request->gradebing2, $request->gradebing3, $request->gradebing4, $request->gradebing5, $request->gradebindo1, $request->gradebindo2, $request->gradebindo3, $request->gradebindo4, $request->gradebindo5, $request->gradefis1, $request->gradefis2, $request->gradefis3, $request->gradefis4, $request->gradefis5, $request->gradekimia1, $request->gradekimia2, $request->gradekimia3, $request->gradekimia4, $request->gradekimia5, $request->gradebio1, $request->gradebio2, $request->gradebio3, $request->gradebio4, $request->gradebio5, $request->gradesejarah1, $request->gradesejarah2, $request->gradesejarah3, $request->gradesejarah4, $request->gradesejarah5, $request->gradekomp1, $request->gradekomp2, $request->gradekomp3, $request->gradekomp4, $request->gradekomp5);
        } else {
            $score_array = array($request->grademat1, $request->grademat2, $request->grademat3, $request->grademat4, $request->grademat5, $request->gradebing1, $request->gradebing2, $request->gradebing3, $request->gradebing4, $request->gradebing5, $request->gradebindo1, $request->gradebindo2, $request->gradebindo3, $request->gradebindo4, $request->gradebindo5, $request->gradeekon1, $request->gradeekon2, $request->gradeekon3, $request->gradeekon4, $request->gradeekon5, $request->gradegeo1, $request->gradegeo2, $request->gradegeo3, $request->gradegeo4, $request->gradegeo5, $request->gradesos1, $request->gradesos2, $request->gradesos3, $request->gradesos4, $request->gradesos5, $request->gradesejarah1, $request->gradesejarah2, $request->gradesejarah3, $request->gradesejarah4, $request->gradesejarah5, $request->gradekomp1, $request->gradekomp2, $request->gradekomp3, $request->gradekomp4, $request->gradekomp5);
        }
        

        session()->put('score_array', $score_array);
        // dd($score_array);

        return redirect()->action([AssessmentController::class, 'majorAssessment3']);
        
    }

    public function majorAssessment3(){

        return view('uni-assessment.uni-assessment-3');
    }

    public function majorAssessment3save(Request $request){
        // $this->budget = $request->budget; 
        session()->put('budget', $request->budget);
        return redirect()->action([AssessmentController::class, 'viewMajorResult']);
    }

    public function viewMajorResult(){
        $user = Auth::user();
        $budget = session()->get('budget');
        $jurusan = session()->get('jurusan');
        $score_array = session()->get('score_array');
        $ipa = 0;
        $ips = 0; 

        $fin_score_array = array(); 

        if($jurusan == 'IPA'){
            $ipa = 1; 
            for($i = 0; $i < 30 ; $i++){
                array_push($fin_score_array, $score_array[$i]);
            }
            for($i = 0; $i < 15; $i++){
                array_push($fin_score_array, 0);
            }
            for($i = 30; $i < count($score_array); $i++){
                array_push($fin_score_array, $score_array[$i]);
            }
        } else {
            $ips = 1; 
            for($i = 0; $i < 15 ; $i++){
                array_push($fin_score_array, $score_array[$i]);
            }
            for($i = 0; $i < 15; $i++){
                array_push($fin_score_array, 0);
            }
            for($i = 15; $i < count($score_array); $i++){
                array_push($fin_score_array, $score_array[$i]);
            }
        }

        array_push($fin_score_array, $ipa, $ips);
        
        // print_r(array_values(value($fin_score_array))); 

        $test_data = array('data' => join(',',$fin_score_array));

        $url = "https://jojbix5rak.execute-api.us-east-1.amazonaws.com/test/predict-major";
        $client = new \GuzzleHttp\Client();
        $response = $client->post($url, [
             'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
             'body'    => json_encode($test_data)
        ]); 
        $majors = json_decode($response->getBody(), true);

        $user->budget = $budget;
        $user->api_result = $majors;
        $user->jurusan = $jurusan; 
        $user->save();

        $major_result = explode(',', $majors);

        // Filter sesuai budget dan jurusan 
        if($jurusan == 'IPA'){
            $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS university_name' , 'majors.name', 'uni_majors.budget')->where('budget', '<=', $budget)->where('stream-science', '=', 1)->orderBy('budget')->get();
        } else {
            $data = DB::table('uni_majors')->join('majors', 'majors.id', '=', 'uni_majors.major_id')->join('universities', 'universities.id', '=', 'uni_majors.university_id')->select('universities.name AS university_name' , 'majors.name', 'uni_majors.budget')->where('budget', '<=', $budget)->where('stream-social', '=', 1)->orderBy('budget')->get();
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

        // Filter output
        $hasil = array(); 
        $other_unis = ""; 
        array_push($hasil, $hasil_persamaan_major[0]);
        for ($i=1; $i < count($hasil_persamaan_major); $i++) { 
            if(count($hasil) == 4){
                break; 
            }

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
        
        return view('uni-assessment.uni-assessment-result', ['major_result' => $output]);
    }

    public function careerAssessment(){
        return view('career-assessment.career-assessment');

    }

    public function careerAssessmentQ(){
        $riasecs = DB::table('riasec_questions')->get();
        return view('career-assessment.career-assessment-q', ['riasecs' => $riasecs]);
    }

    public function careerAssessmentSave(Request $request){
        dd($request->r1, $request->r2, $request->r3, $request->r4, $request->r5); 
        return view('career-assessment.career-assessment-q');
    }

    public function viewCareerResult(){

        return view('career-assessment.career-assessment-result');
    }
}
