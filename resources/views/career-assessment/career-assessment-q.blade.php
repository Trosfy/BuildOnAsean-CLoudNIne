@extends('layouts.app')
<style>
    .tab, .completed {
        display: none;
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
<div class="container-100vh d-flex flex-column justify-content-center align-items-center bgImg" style="background-image: url('{{asset('storage/assets/bg/bg-32.svg')}}">
    <form action="/get-riasec-data" method="POST" class="formUni regForm" id="riasecForm">
        @csrf

        <div>
            <div class="vw-60">
                <div class="tab" data-aos="fade-down">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #1
                        </span> 
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to work on cars
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r1" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r1" id="exampleRadios2"value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #2
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to do puzzles
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r2" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r2" id="exampleRadios2"  value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #3
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am good at working independently
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r3" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r3" id="exampleRadios2"  value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #4
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to work in teams
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r4" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r4" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #5
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am an ambitious person, I set goals for myself
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r5" id="exampleRadios1"value="E" checked >
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r5" id="exampleRadios2"value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>

                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #6
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to organize things, (files, desks/offices)
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r6" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r6" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #7
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to build things
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r7" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r7" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #8
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to read about art and music
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r8" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r8" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #9
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to have clear instructions to follow
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r9" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r9" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #10
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to try to influence or persuade people
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r10" id="exampleRadios1" value="E" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r10" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #11
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to do experiments
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r11" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r11" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #12
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to teach or train people
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r12" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r12" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #13
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like trying to help people solve their problems
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r13" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r13" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #14
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to take care of animals
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r14" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r14" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #15
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I wouldn’t mind working 8 hours per day in an office
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r15" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r15" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>

                                
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #16
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like selling things
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r16" id="exampleRadios1" value="E" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r16" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #17
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I enjoy creative writing
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r17" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r17" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #18
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I enjoy science
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r18" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r18" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #19
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am quick to take on new responsibilities
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r19" id="exampleRadios1" value="E" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r19" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #20
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am interested in healing people
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r20" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r20" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                
                                
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #21
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I enjoy trying to figure out how things work
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r21" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r21" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #22
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like putting things together or assembling things
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r22" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r22" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #23
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am a creative person
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r23" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r23" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #24
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I pay attention to details
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r24" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r24" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #25
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to do filing or typing
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r25" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r25" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                                
                                
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #26
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to analyze things (problems/situations)
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r26" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r26" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #27
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to play instruments or sing
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r27" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r27" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #28
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I enjoy learning about other cultures
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r28" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r28" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #29
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I would like to start my own business
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r29" id="exampleRadios1" value="E" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r29" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #30
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to cook
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r30" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r30" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                                                
                                
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #31
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like acting in plays
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r31" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r31" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #32
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am a practical person
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r32" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r32" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #33
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like working with numbers or charts
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r33" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r33" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #34
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to get into discussions about issues
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r34" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r34" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #35
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I am good at keeping records of my work
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r35" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r35" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                                                                
                                
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #36
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to lead
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r36" id="exampleRadios1" value="E" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r36" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #37
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like working outdoors
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r37" id="exampleRadios1" value="R" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r37" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #38
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I would like to work in an office
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r38" id="exampleRadios1" value="C" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r38" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #39
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I’m good at math
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r39" id="exampleRadios1" value="I" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r39" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #40
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like helping people
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r40" id="exampleRadios1" value="S" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r40" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>

                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #41
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to draw
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r41" id="exampleRadios1" value="A" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r41" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div>
                <div class="tab">
                    <div class="p10 d-flex flex-column justify-content-center">
                        <span class="text-12-sb text-darkgrey">
                            Question #42
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            I like to give speeches
                        </span>
                        <div class="row text-darkgrey text-14-r">
                            <div class="form-group a d-flex justify-content-center flex-column mb-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r42" id="exampleRadios1" value="E" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Agree
                                    </label>
                                    </div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="r42" id="exampleRadios2" value="0">
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disagree
                                    </label>
                                    </div>
                            </div>
                        </div>
        
                    </div>  

                </div> 

            </div>

            <div class="btnGroupContainer mt-6">
                <div class="p1">
                    <button class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)" type="button"> <img src="{{asset('storage/assets/icons/back-arrow.svg')}}" alt="" class="icon filter-white"> Back</button>
                </div>

                <div class="p1">
                    <button class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"type="button">Next <img src="{{asset('storage/assets/icons/arrow.svg')}}" id="btnImg" alt="" class="icon filter-white"></button>

                </div>
                    
            </div>
        </div>

    </form>
    <div class="completed text-center"data-aos="zoom-in">
        <img src="{{asset('storage/assets/illustrations/career-test-1.svg')}}" alt="image" class="imgSquare">
        <br>
        <span class="text-h4 text-blue-dark">
            Done!
        </span>
        <br>
        <span class="text-14-r">
            Please wait, we are processing your results!
        </span>
        <br>

    </div>
</div>
@section('script')
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        // var radios = document.getElementsByName('r1');

        // for (var i = 0, length = radios.length; i < length; i++) {
        // if (radios[i].checked) {
        //     // do whatever you want with the checked radio
        //     alert(radios[i].value);

        //     // only one radio can be logically checked, don't check the rest
        //     break;
        // }
        // }

        // var x = 0;
        // x = $('input[name="r1"]:checked').val();
        // console.log(x);
    </script>
@endsection
@endsection
