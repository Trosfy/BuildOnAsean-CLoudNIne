@extends('layouts.uni-assessment-layout')
<title>University/Major Assessment? 1</title>
<style>

</style>
@section('uniLeft')
<div class="d-flex stepsContainer justify-content-around mt-4">
    <img src="{{asset('storage/assets/step-1-active.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-2.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-3.svg')}}" alt="">
</div>
<br>
<img src="{{asset('storage/assets/illustrations/major-test-1.svg')}}" alt="image" class="imgSquare mt-3">
<span class="uniText" >
    <br>
    <span class="text-h4 text-blue-dark">
        Choose your stream 
    </span>
    <br>
    <span class="text-14-r text-white">
        
    </span>
</span>
@endsection

@section('uniRight')
<div class="uniAssessmentContainer">
    <form action="/major-assessment/1" method="POST" class="formUni" >
        @csrf
        <div class="row">
            <div class="form-group a d-flex justify-content-center flex-column"data-aos="fade-up">
                <span class="text-h4 text-blue-dark">
                    Choose your stream 
                </span>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jurusan" id="exampleRadios1" value="IPA" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Science
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jurusan" id="exampleRadios2" value="IPS">
                    <label class="form-check-label" for="exampleRadios2">
                      Social
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
