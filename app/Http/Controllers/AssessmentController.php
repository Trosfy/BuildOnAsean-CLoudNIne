<?php

namespace App\Http\Controllers;

use App\RiasecQuestion;
use Illuminate\Http\Request;
use lluminate\Support\Facades\Log;

class AssessmentController extends Controller
{
    public function view_riasec_assessment_page(){
        $questions = RiasecQuestion::all();
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
}
