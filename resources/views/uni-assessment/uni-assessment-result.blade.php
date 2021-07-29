@extends('layouts.assessment-result-layout')
<title>Major Assessment Result</title>

@section('main')
<span class="text-h3 mb-4 mt-4 text-green-dark">
    Top 3 Result
</span>
@foreach ($major_result as $result)
<div class="cardContainer shadow"data-aos="zoom-in-up">
    <div class="cardImgContainer">
        <img src="{{asset('storage/assets/images/majors/'.$result->major_img)}}" alt="image">
    </div>
    <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
        <div class="cardTitle">
            <span class="text-14-r text-blue-dark">
                {{$result->university_name}}
            </span>
            <br>
            <a href="/major/{{$result->id}}" class="text-decoration-none text-blue-dark">
            <span class="text-h4 text-blue-dark">
                {{$result->trans_name}}
            </span>
        </a>
        </div>
        <div class="cardType">
            @if($result->stream_science == 1)
                <a class="type text-12-sb text-blue-light">Science</a>
            @endif
            @if($result->stream_social == 1)
                <a class="type text-12-sb text-blue-light">Social</a>
            @endif
        </div>
        <div class="cardDesc text-14-r text-darkgrey">
            @if(strlen($result->other_major)>0)
            Also available in: {{$result->other_major}}
        @endif        </div>
        <div class="cardFooter">
        <button type="button" class="btn btn-primary text-12-sb" onclick="window.location.href='/major/{{$result->id}}'">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
            <span class="cardTuition text-h4 text-blue-dark">
                Rp {{$result->budget}}
            </span>
        </div>
    </div>
</div>
@endforeach

@endsection