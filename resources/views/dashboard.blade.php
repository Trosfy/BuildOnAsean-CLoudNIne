@extends('layouts.app')
<title>Home</title>
@section('content')
<div class="container-50vh d-flex  align-items-end bgImg"  style="background-image: url({{asset('storage/assets/bg/bg-user.png')}});">
    <div class="mb-5 ml-5 d-flex  align-items-center justify-content-around ">
        <img src="{{asset('storage/assets/illustrations/user.svg')}}" alt="" class="imgSquareM">
        <span class="text-h2 text-blue-dark ml-3">Hi, {{Auth::user()->first_name}}!</span>
    </div>
    
</div>
@if(!is_null($major_recommendation))
    <div class="container-100vh d-flex p2 justify-content-center">
        <div class="right p2">
            <div>
                <span class="text-h4 text-blue-dark">Recommended Major</span>
            </div>
            @foreach ($major_recommendation as $major)
            <div class="cardContainer shadow"data-aos="zoom-in-up">
                <div class="cardImgContainer">
                    {{-- <img src="{{asset('storage/assets/images/majors/'.$major->img)}}" alt="image"> --}}
                    <?php $url = "https://cloudnineassets.s3.amazonaws.com/images/majors/".$major->img?>
                    <img src="{{$url}}" alt="image">
                </div>
                <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                    <div class="cardTitle">
                        <span class="text-14-r text-blue-dark">
                            {{$major->university_name}}
                        </span>
                        <br>
                        <a href="/major/{{$major->id}}" class="text-decoration-none text-blue-dark">
                        <span class="text-h4 text-blue-dark">
                            {{$major->trans_name}}
                        </span>
                    </a>
                    </div>
                    <div class="cardType">
                        @if($major->stream_science == 1)
                            <a class="type text-12-sb  text-blue-light">Science</a>
                        @endif
                        @if($major->stream_social == 1)
                            <a class="type text-12-sb  text-blue-light">Social</a>
                        @endif
                    </div>
                    <div class="cardDesc text-14-r text-darkgrey">
                        {{Str::of($major->description)->words(20, ' . . .')}}
                    </div>
                    <div class="cardFooter">
                    <button type="button" class="btn btn-primary text-12-sb" onclick="window.location.href='/major/{{$major->id}}'">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
                        <span class="cardTuition text-h4 text-blue-dark">
                            Rp {{$major->budget}}
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif

@if (!is_null($career_recommendation) and !is_null($major_recommendation))
    <div class="container-100vh d-flex p2 justify-content-center">
        <div class="right p2">
            <div>
                <span class="text-h4 text-blue-dark">Recommended Careers</span>
            </div>
            @foreach ($career_recommendation as $career)
            <div class="cardContainer shadow"data-aos="zoom-in-up">
                <div class="cardImgContainer">
                    {{-- <img src="{{asset('storage/assets/images/careers/'.$career->img)}}" alt="image"> --}}
                    <?php $url = "https://cloudnineassets.s3.amazonaws.com/images/careers/".$career->career_img?>
                    <img src="{{$url}}" alt="image">
                </div>
                <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                    <div class="cardTitle">
                        <span class="text-h4 text-blue-dark mt-4">
                            <a href="/career/{{$career->id}}" class="text-decoration-none text-blue-dark">{{$career->jobtitle}}</a>
                        </span>
                    </div>
                    <div class="cardType">
                        <a class="type text-12-sb text-blue-light" href="/major/{{$career->major_id}}">{{$career->trans_name}}</a>
                    </div>
                    <div class="cardDesc text-14-r text-darkgrey">
                        {{Str::of($career->overview)->words(20, ' . . .')}}
                    </div>
                    <div class="cardFooter">
                        <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/{{$career->id}}" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif

@if(is_null($major_recommendation))
    <div class="aa container-100vh d-flex flex-column justify-content-center align-items-center bgImg container-auto-r bg-pink-light">
        <span class="text-h4 text-blue-dark mb-2">Recommended Careers</span>
        <br>
        <div class="border-50 bg-blue-dark cardd d-flex justify-content-around align-items-center flex-column p5 min-h-50  mb-2-r w-75-r" data-aos="zoom-in-up">
            <img src="{{asset('storage/assets/illustrations/home-31.svg')}}" alt="image" style="object-fit: contain;" class="imgSquare">

            <div >
                <span class="text-h4 text-pink-light">Major Assessment</span>
            </div>
            <div>
                <a href="/major-assessment" class="btn btn-primary mt-3">Take test</a>
            </div>
        </div>
    </div>
    @elseif (is_null($career_recommendation))
        @if(!is_null($major_recommendation))
        <div class="aa container-100vh d-flex flex-column justify-content-center align-items-center bgImg container-auto-r bg-pink-light">
            <span class="text-h4 text-blue-dark mb-2">Recommended Careers</span>
            <br>
            <div class="border-50 bg-blue-dark cardd d-flex justify-content-around align-items-center flex-column p5 min-h-50 mb-2-r  w-75-r" data-aos="zoom-in-up">
                <img src="{{asset('storage/assets/illustrations/home-32.svg')}}" alt="image" style="object-fit: contain;" class="imgSquare">
        
                <div >
                    <span class="text-h4 text-pink-light">Career Assessment</span>
                </div>
                <div>
                    <a href="/career-assessment" class="btn btn-primary mt-3">Take test</a>
                </div>
            </div>
        </div>
        @endif
    @endif
@endsection