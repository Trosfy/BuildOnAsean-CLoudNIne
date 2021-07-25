@extends('layouts.uni-assessment-layout')
<title>University/Major Assessment? 3</title>

@section('uniLeft')
<div class="d-flex stepsContainer justify-content-around mt-4">
    <img src="{{asset('storage/assets/step-1.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-2.svg')}}" alt="">
    <img src="{{asset('storage/assets/step-3-active.svg')}}" alt="">
</div>
<br>
<img src="{{asset('storage/assets/illustrations/major-test-3.svg')}}" alt="image" class="imgSquare mt-3">
<span class="uniText">
    <br>
    <span class="text-h4 text-blue-dark">
        Input your budget
    </span>
    <br>
    <span class="text-14-r text-white">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae architecto quis eligendi, alias non corrupti repellendus. 
    </span>
</span>
@endsection

@section('uniRight')
<div class="uniAssessmentContainer ">
    <form action="/major-assessment/3" method="POST" class="formUni">
        @csrf

        <div class="row" >
            <div class="form-group a d-flex justify-content-center flex-column text-left"data-aos="fade-up">
                
                <label for="budget" class="col-form-label text-h4 text-blue-dark">Input your budget</label>

                            <div class="d-flex align-items-center">
                                Rp. 
                                <input id="budget" type="number" class="ml-2 form-control @error('budget') is-invalid @enderror" name="budget" placeholder="0">

                                @error('budget')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
        </div>
        <div class="row">
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">
                    Finish
                    <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white">
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
