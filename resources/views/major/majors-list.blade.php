@extends('layouts.app')
<title>Majors</title>
    
@section('content')         
<div class="container-100vh d-flex justify-content-center align-content-center align-items-center pHeader flex-column-r container-65vh-r pt-4-r" style="background-image: url({{asset('storage/assets/bg/bg-41.svg')}});">
    <div class="imgContainer"data-aos="zoom-in-right">
        <img src="{{asset('storage/assets/illustrations/major-11.svg')}}" alt="logo" class="imgLanding">

    </div>
    <div class="textContainer center-r"data-aos="zoom-in-left ">
        <div>
            <span class="text-h2 text-blue-dark">
                Majors 
            </span>
            <br>
            <span class="text-14-r text-white">
                College offers you many academic freedoms. You can cultivate existing passions and explore new interests—and find a major that will put you on the career path you want. 
            </span>
        </div>
        <div class="mt-4">
            <a href="/major-assessment/1"><button class="btn btn-primary">Start major assessment <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
        </div>
    </div>
</div>
<form method="POST" action="/majors" class="text-14-sb" name="myform" id="myform">
<div class="container-200vh d-flex p2 bg-pink-light justify-content-center">
    <div class="left p2">
        {{-- <span>Filters</span> --}}
        <div class="filterContainer p2 mt-5 shadowGreen">
            
                @csrf
                <div class="form-group col-md-6 mb-0">
                    <span class="text-16-sb">Stream</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'all' ? 'checked' : ''}} value="all" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioAll">
                            All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'IPA' ? 'checked' : ''}} value="IPA" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioCareer">
                            Science
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'IPS' ? 'checked' : ''}} value="IPS" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            Social
                        </label>
                    </div>
                </div>
            
        </div>
    </div>
    <div class="right p2">
        <div>
            
                <label for="sortby" class="text-white">Sort by </label>
                <Select onchange="myform.submit()" name="sort" id="sortby" class="p1 ml-2">
                <!-- <Select name="sort" id="sortby" class="p1 ml-2"> -->
                    <option value="asc" {{ old('sort', 'asc') == 'asc' ? 'selected' : '' }}>Alphabetical (A-Z)</option> 
                    <option value="desc" {{ old('sort', 'asc') == 'desc' ? 'selected' : '' }}>Alphabetical (Z-A)</option> 
                    @if(Auth::user() && Auth::user()->api_result != null)                  
                        <option value="best" {{ old('sort', 'asc') == 'best' ? 'selected' : '' }}>Best Match </option> 
                    @endif
                </select>
            
            
        </div>
        @foreach ($majors as $major)
            <div class="cardContainer shadow"data-aos="zoom-in-up">
                <div class="cardImgContainer">
                    {{-- <img src="{{asset('storage/assets/images/majors/'.$major->img)}}" alt="image"> --}}
                    <?php $url = "https://cloudnineassets.s3.amazonaws.com/images/majors/".$major->img?>
                    <img src="{{$url}}" alt="image">
                </div>
                <div class="cardTextContainer d-flex flex-column justify-content-center w-100">
                    <div class="cardTitle">
                        <span class="text-14-r text-blue-dark">
                            {{$major->uni_name}}
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

        <div>
        @if(old('sort', 'asc') != 'best')
        <div class="paginationContainer">
            {{ $majors->withQueryString()->links() }}
        </div>
        @endif
        </div>
    </div>
</div>
</form>
@endsection