@extends('layouts.uni-assessment-layout')
<title>University/Major Assessment? 1</title>
<style>

</style>
@section('uniLeft')
<div class="d-flex stepsContainer justify-content-around">
    <img src="{{asset('storage/assets/step-1-active.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-2.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-3.svg')}}" alt="">
</div>
<br>
<img src="{{asset('storage/assets/icons/search.svg')}}" alt="image" class="imgSquare">
<span class="uniText">
    <br>
    <span class="text-h4 text-blue-dark">
        Choose your penjurusan 
    </span>
    <br>
    <span class="text-14-r text-darkgrey">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae architecto quis eligendi, alias non corrupti repellendus. 
    </span>
</span>
@endsection

@section('uniRight')
<div class="uniAssessmentContainer ">
    <form action="/major-assessment/2" method="" class="formUni">
        @csrf

        <div class="row">
            <div class="form-group a d-flex justify-content-center flex-column">
                <span class="text-h4 text-blue-dark">
                    Choose your penjurusan 
                </span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      IPA
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                      IPS
                    </label>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">
                    Next
                    <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white">
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
