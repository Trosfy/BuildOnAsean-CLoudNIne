<?php

namespace App\Http\Controllers;

use App\RiasecQuestion;
use Illuminate\Http\Request;
use lluminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class AssessmentController extends Controller
{
    public function view_riasec_assessment_page(){
        $questions = RiasecQuestion::paginate(5);

        return view('career-paginate', ['questions' => $questions]); 
        
    }

    public function get_risec_result(Request $request){
        // foreach($_POST['checked'] as $item){
        //     $result[] = {0}; 
        //     if($item=='R'){
        //         $result += 1; 
        //     }
        //     return view('riasec-assessment', ['questions' => $questions]);
        // }

        $checked = $request->input('checked');
        $result = array(); 
        $countR = 0;
        $countI = 0; 
        $countA = 0;
        $countS = 0;
        $countE = 0;
        $countC = 0; 
        $first = $second = $third = PHP_INT_MIN; 
        $top1 = $top2 = $top3 = PHP_INT_MIN; 
        foreach($checked as $check){
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

        $tops = array();
        array_push($tops, $top1, $top2, $top3); 
        return view('riasec-result', ['tops' => $tops]);
    }

    public function majorAssessment(){

        return view('uni-assessment.uni-assessment');
    }

    public function majorAssessment1(){

        return view('uni-assessment.uni-assessment-1');
    }

    public function majorAssessment1save (Request $request){
        //test data
        $test_data = array(
            'data' => "78,78,93,93,93,83,83,83,83,93,78,78,78,78,78,83,83,88,88,78,78,78,78,78,78,78,78,83,83,83,78,78,88,88,93,79.24305051,79.87593939,79.7976569,80.3623431,82.44420502,0,0,0,0,0,83,83,83,83,88,98,98,93,93,93,1,0",
         );
         $url = "https://jojbix5rak.execute-api.us-east-1.amazonaws.com/test/predict-major";
         $client = new \GuzzleHttp\Client();
         $response = $client->post($url, [
             'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
             'body'    => json_encode($test_data)
         ]); 
         print_r(json_decode($response->getBody(), true));
    }

    public function majorAssessment2(){

        return view('uni-assessment.uni-assessment-2-ipa');
    }

    public function majorAssessment3(){

        return view('uni-assessment.uni-assessment-3');
    }

    public function viewMajorResult(){

        return view('uni-assessment.uni-assessment-result');
    }

    public function careerAssessment(){
        return view('career-assessment.career-assessment');

    }

    public function careerAssessmentQ(){
        return view('career-assessment.career-assessment-q');

    }

    public function viewCareerResult(){

        return view('career-assessment.career-assessment-result');
    }
}
