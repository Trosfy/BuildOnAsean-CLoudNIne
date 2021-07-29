@extends('layouts.app')

@section('content')
<div class="container-50vh bgImg d-flex flex-column justify-content-center align-items-center" style="background-image: url({{asset('storage/assets/bg/bg-search.png')}})">
    <span class="text-h3 text-pink-dark text-center">Search results</span>
    <br>
    <span class="text-14-r">We found
        <span class="text-14-sb"> 
            @if(Request::input('filter') == null || Request::input('filter') == 'all')
                {{count($majors) + count($careers)}} 
            @elseif(Request::input('filter') == 'major')
                {{count($majors)}} 
            @else
                {{count($careers)}} 
            @endif

        
        </span>
        results for
        <span class="text-14-sb"> "{{Request::input('query')}}" </span>
        !
    </span>

</div>

<div class="container-200vh d-flex p2 bg-pink-light justify-content-center">
    <div class="left p2">
        {{-- <span>Filters</span> --}}
        <div class="filterContainer p2 mt-5 shadowGreen">
            <form method="GET" action="/search" class="text-14-sb" name="myform">
                <div class="form-group col-md-6 mb-0">
                    <span class="text-16-sb">Type</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="radioAll" {{ (Request::input('filter') == null ? 'checked' : Request::input('filter') == 'all' ) ? 'checked' : ''}} value="all" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioAll">
                            All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="radioCareer" {{ Request::input('filter') == 'major' ? 'checked' : ''}} value="major" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioCareer">
                            Majors
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="filter" id="radioMajor" {{ Request::input('filter') == 'career' ? 'checked' : ''}} value="career" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            Careers
                        </label>
                    </div>
                    <input type="hidden" name="query" value="{{Request::input('query')}}">
                </div>
            </form>
        </div>
    </div>
    <div class="right p2">
            
        @if(Request::input('filter') == 'major')
            @if(count($majors) == 0)
            <div class="vw-60 mt-5">There are no matching majors.</div>
            @else
            @foreach ($majors as $major)
                <div class="cardContainer shadow"data-aos="zoom-in-up">
                    <div class="cardImgContainer">
                        <img src="{{asset('storage/assets/images/majors/'.$major->img)}}" alt="image">
                    </div>
                    <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                        <div class="cardTitle">
                            <a href="/major/{{$major->id}}" class="text-decoration-none text-blue-dark">
                            <span class="text-h4 text-blue-dark">
                                {{$major['trans-name']}}
                            </span>
                        </a>
                        </div>
                        <div class="cardDesc text-14-r text-darkgrey">
                            {{Str::of($major->description)->words(20, ' . . .')}}
                        </div>
                        <div class="cardFooter">
                                <button class="btn btn-primary btnRightt text-12-sb"><a href="/major/{{$major->id}}" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        @elseif(Request::input('filter') == 'career')
            @if(count($careers) == 0)
            <div class="vw-60 mt-5">There are no matching careers.</div>
            @else
                @foreach($careers as $career)
                    <div class="cardContainer shadow"data-aos="zoom-in-up">
                        <div class="cardImgContainer">
                            <img src="{{asset('storage/assets/images/careers/'.$career->img)}}" alt="image">
                        </div>
                        <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                            <div class="cardTitle">
                                <span class="text-h4 text-blue-dark mt-4">
                                    <a href="/career/{{$career->id}}" class="text-decoration-none text-blue-dark">{{$career->jobtitle}}</a>
                                </span>
                            </div>
                            <div class="cardType">
                                <!-- <a class="type text-12-sb" href="/major/{{$career->major_id}}">{{$career->major_name}}</a> -->
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
            @endif
        @else
            @if(count($majors)+count($careers) == 0)
            <div class="vw-60 mt-5">There are no matching majors and careers.</div>
            @else
                @foreach ($majors as $major)
                    <div class="cardContainer shadow"data-aos="zoom-in-up">
                        <div class="cardImgContainer">
                            <img src="{{asset('storage/assets/images/majors/'.$major->img)}}" alt="image">
                        </div>
                        <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                            <div class="cardTitle">
                                <span class="text-14-r text-blue-dark">

                                    
                                </span>
                                <br>
                                <a href="/major/{{$major->id}}" class="text-decoration-none text-blue-dark">
                                <span class="text-h4 text-blue-dark">
                                    {{$major['trans-name']}}
                                </span>
                            </a>
                            </div>
                            <div class="cardType">
                                @if($major->stream_science == 1)
                                    <a class="type text-12-sb">IPA</a>
                                @endif
                                @if($major->stream_social == 1)
                                    <a class="type text-12-sb">IPS</a>
                                @endif
                            </div>
                            <div class="cardDesc text-14-r text-darkgrey">
                                {{Str::of($major->description)->words(20, ' . . .')}}
                            </div>
                            <div class="cardFooter">
                            <button class="btn btn-primary btnRightt text-12-sb"><a href="/major/{{$major->id}}" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                            </div>
                        </div>
                    </div>
                @endforeach
                @foreach($careers as $career)
                    <div class="cardContainer shadow"data-aos="zoom-in-up">
                        <div class="cardImgContainer">
                            <img src="{{asset('storage/assets/images/careers/'.$career->img)}}" alt="image">
                        </div>
                        <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                            <div class="cardTitle">
                                <span class="text-h4 text-blue-dark mt-4">
                                    <a href="/career/{{$career->id}}" class="text-decoration-none text-blue-dark">{{$career->jobtitle}}</a>
                                </span>
                            </div>
                            <div class="cardType">
                                <!-- <a class="type text-12-sb" href="/major/{{$career->major_id}}">{{$career->major_name}}</a> -->
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
            @endif
        
        @endif
        <div>
            <!-- Pagination -->
        </div>
    </div>
</div>
@endsection