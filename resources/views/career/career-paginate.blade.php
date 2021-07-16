@extends('layouts.app')
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}

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
    .pagination{
        margin-left: auto !important;
        margin-right: auto !important;
    }
    .qContainerr button{
        margin-left: auto !important;
        margin-right: auto !important;
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
            <button class="btn btn-primary">
                Start your free test
            </button>
        </div>
    </div>
    <div class="container-200vh" id="qContainer">
        <form action="/get-riasec-data" method="POST" class="formUni regForm">
            @csrf
            <div class="questionContainer d-flex ">


                <div class="qContainerr  flex-grow-1 d-flex flex-column ">
                    @foreach($questions as $index=>$question)
                    <div class="qContainer">
                        <span class="qNo">
                            Question #{{$index+1}}
                        </span>
                        <br>
                        <span class="qText">
                            {{$question->question}}
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
                    @endforeach
                    <div class="pagination">
                        {{$questions->withQueryString()->links()}}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <div class="btnGroupContainer">
                        <div class="btnContainer">
                            <button class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)" type="button"><- Back</button>
                        </div>
    
                        <div class="btnContainer">
                            <button class="btn btn-primary" id="nextBtn" onclick="nextPrev(1)"type="button">Next -></button>
        
                        </div>
                            
                    </div> --}}

                </div>


            </div>

        </form>

    </div>


</div>


@endsection
