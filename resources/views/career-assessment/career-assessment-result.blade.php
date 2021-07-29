@extends('layouts.assessment-result-layout')
<title>Career Assessment Result</title>
<style>

</style>

@section('main')
<span class="text-h3 mb-4 mt-4 text-blue-dark">
    Top 3 Result
</span>
{{-- Your RIASEC code is : {{$quizresult}} --}}
@foreach ($career_recommendation as $recommendation)
<div class="cardContainer shadow"data-aos="zoom-in-up">
    <div class="cardImgContainer">
        <img src="{{asset('storage/assets/images/careers/'.$recommendation->career_img)}}" alt="image">
    </div>
    <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
        <div class="cardTitle">
            <span class="text-h4 text-blue-dark mt-4">
                <a href="/career/{{$recommendation->career_id}}" class="text-decoration-none text-blue-dark">{{$recommendation->jobtitle}}</a>
            </span>
        </div>
        <div class="cardType">
            <a class="type text-12-sb" href="/major/{{$recommendation->major_id}}">{{$recommendation->trans_name}}</a>
        </div>
        <div class="cardDesc text-14-r text-darkgrey">
            {{Str::of($recommendation->overview)->words(20, ' . . .')}}
        </div>
        <div class="cardFooter">
            <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/{{$recommendation->career_id}}" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
        </div>
    </div>
</div>
@endforeach

@endsection