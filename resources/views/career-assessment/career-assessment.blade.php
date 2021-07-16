@extends('layouts.app')
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
<title>Career Assessment</title>
<style>
    .tab, .completed {
        display: none;
    }

    .completed{
        border: 2px solid peru;
        text-align: center;
    }
    .imgContainerM{
        width: 50vh !important;
        height: 50vh !important;
        border: 2px solid yellow;
        margin-right: auto;
        margin-left: auto;
    }

</style>

@section('content')
<div class="">
    <div class="container-100vh flex-center">
        <div class="text-center headerCareerTest">
            <span class="text-h2">Discover your passion</span>
            <br>
            <span class="text-14-r">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi laborum excepturi quo quod doloribus. Fugit natus quidem distinctio, eius laudantium provident dicta. Dignissimos quibusdam illum provident eligendi labore dolorum ratione!
            </span>
            <br>
            <button class="btn btn-primary mt-3">
                Start your free test
            </button>
        </div>
    </div>
    <div class="container-200vh" id="qContainer">
        <form action="" method="" class="formUni regForm">
            @csrf
            <div class="questionContainer d-flex">


                <div class="qContainerr  flex-grow-1 d-flex flex-column">
                    <div class="tab">
                        <div class="qContainer">
                            <span class="qNo">
                                Question #1
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #2
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #3
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #4
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #5
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #6
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #7
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>     
    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #8
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #9
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #10
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
    

                    </div>
                    
                    <div class="tab">
                        <div class="qContainer">
                            <span class="qNo">
                                Question #11
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #12
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #13
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #14
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #15
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #16
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #17
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>     
    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #18
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #19
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #20
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
    

                    </div>

                    <div class="tab">
                        <div class="qContainer">
                            <span class="qNo">
                                Question #11
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #12
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios2" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #13
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios3" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #14
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios4" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #15
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios5" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                
                        <div class="qContainer">
                            <span class="qNo">
                                Question #16
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios6" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #17
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios7" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>     
    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #18
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios8" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #19
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios9" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
                                    
                        <div class="qContainer">
                            <span class="qNo">
                                Question #20
                            </span>
                            <br>
                            <span class="qText">
                                Test the quality of parts before shipment
                            </span>
                            <div class="row">
                                <div class="form-group a d-flex justify-content-center flex-column">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label" for="exampleRadios1">
                                            Agree
                                        </label>
                                        </div>
                                        <div class="form-check">
                                        <input class="form-check-input" type="radio" name="exampleRadios10" id="exampleRadios2" value="option2">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Disagree
                                        </label>
                                        </div>
                                </div>
                            </div>
            
                        </div>  
    

                    </div>
                    
                    <div class="btnGroupContainer">
                        <div class="btnContainer">
                            <button class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)" type="button"><- Back</button>
                        </div>
    
                        <div class="btnContainer">
                            <button class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"type="button">Next -></button>
        
                        </div>
                            
                    </div>
                
                    <div class="completed">
                        <div class="imgContainerM">
                            <img src="" alt="" >
                        </div>
                        <span>
                            udah kelar
                        </span>
                        <br><a href="/career-assessment-result" class=" text-white">
                        <button class="btn btn-primary">
                            See your result
                            
                        </button></a>
                    </div>
                </div>


            </div>

        </form>

    </div>


</div>

{{-- <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
    }
</script> --}}

{{-- <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    // fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    //   if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    // x = document.getElementsByClassName("tab");
    // y = x[currentTab].getElementsByTagName("input");
    // // A loop that checks every input field in the current tab:
    // for (i = 0; i < y.length; i++) {
    //   // If a field is empty...
    //   if (y[i].value == "") {
    //     // add an "invalid" class to the field:
    //     y[i].className += " invalid";
    //     // and set the current valid status to false
    //     valid = false;
    //   }
    // }
    // // If the valid status is true, mark the step as finished and valid:
    // if (valid) {
    //   document.getElementsByClassName("step")[currentTab].className += " finish";
    // }
    return valid; // return the valid status
    }

    function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    // var i, x = document.getElementsByClassName("step");
    // for (i = 0; i < x.length; i++) {
    //   x[i].className = x[i].className.replace(" active", "");
    // }
    // //... and adds the "active" class on the current step:
    // x[n].className += " active";
    }
</script> --}}

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    // fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        console.log("submitted" + x.length)

        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "none";

        // document.getElementById("regForm").submit();

        var z = document.getElementsByClassName("completed");
        z[0].style.display = "block";

        var element = document.getElementById("qContainer");
        element.classList.add("container-100vh");
        element.classList.remove("container-200vh");
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    // if (valid) {
    //     document.getElementsByClassName("step")[currentTab].className += " finish";
    // }
    return valid; // return the valid status
    }

    // function fixStepIndicator(n) {
    // // This function removes the "active" class of all steps...
    // var i, x = document.getElementsByClassName("step");
    // for (i = 0; i < x.length; i++) {
    //     x[i].className = x[i].className.replace(" active", "");
    // }
    // //... and adds the "active" class on the current step:
    // x[n].className += " active";
    // }
</script>
@endsection
