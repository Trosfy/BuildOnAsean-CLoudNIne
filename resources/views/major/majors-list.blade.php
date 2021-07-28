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
<form method="POST" action="/majors" class="text-14-sb" name="myform">
<div class="container-200vh d-flex p2 bg-pink-light justify-content-center">
    <div class="left p2">
        {{-- <span>Filters</span> --}}
        <div class="filterContainer p2 mt-5 shadowGreen">
            
                @csrf
                <div class="form-group col-md-6 mb-0">
                    <span class="text-16-sb">Jurusan</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'all' ? 'checked' : ''}} value="all" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioAll">
                            All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'IPA' ? 'checked' : ''}} value="IPA" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioCareer">
                            IPA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'IPS' ? 'checked' : ''}} value="IPS" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            IPS
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
                    <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
                </div>
                <div class="cardTextContainer w-100 w-100">
                    <div class="cardTitle">
                        <span class="text-14-r text-blue-dark">
                            {{-- BINUS University --}}
                            {{$major->uni_name}}
                        </span>
                        <br>
                        <span class="text-h4 text-blue-dark">
                            {{-- Pendidikan Dokter Gigi --}}
                            {{$major->major_name}}
                        </span>
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
                        {{-- Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ... --}}
                        {{Str::of($major->description)->words(40, ' . . .')}}
                    </div>
                    <div class="cardFooter">
                    <button type="button" class="btn btn-primary text-12-sb" onclick="window.location.href='/major/{{$major->id}}'">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
                        <span class="cardTuition text-h4 text-blue-dark">
                            {{-- Rp 100.000.000 --}}
                            {{$major->budget}}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer w-100 w-100">
                <div class="cardTitle">
                    <span class="text-14-r text-blue-dark">
                        BINUS University
                    </span>
                    <br>
                    <span class="text-h4 text-blue-dark">
                        Pendidikan Dokter Gigi
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">IPA</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <a href="/major/1" class="text-decoration-none text-white"><button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
                    <span class="cardTuition text-h4 text-blue-dark">
                        Rp 100.000.000
                    </span>
                </div>
            </div>
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer w-100 w-100">
                <div class="cardTitle">
                    <span class="text-14-r text-blue-dark">
                        BINUS University
                    </span>
                    <br>
                    <span class="text-h4 text-blue-dark">
                        Pendidikan Dokter Gigi
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">IPA</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <a href="/major/1" class="text-decoration-none text-white"><button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
                    <span class="cardTuition text-h4 text-blue-dark">
                        Rp 100.000.000
                    </span>
                </div>
            </div>
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer w-100 w-100">
                <div class="cardTitle">
                    <span class="text-14-r text-blue-dark">
                        BINUS University
                    </span>
                    <br>
                    <span class="text-h4 text-blue-dark">
                        Pendidikan Dokter Gigi
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">IPA</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <a href="/major/1" class="text-decoration-none text-white"><button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
                    <span class="cardTuition text-h4 text-blue-dark">
                        Rp 100.000.000
                    </span>
                </div>
            </div>
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer w-100 w-100">
                <div class="cardTitle">
                    <span class="text-14-r text-blue-dark">
                        BINUS University
                    </span>
                    <br>
                    <span class="text-h4 text-blue-dark">
                        Pendidikan Dokter Gigi
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">IPA</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <a href="/major/1" class="text-decoration-none text-white"><button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
                    <span class="cardTuition text-h4 text-blue-dark">
                        Rp 100.000.000
                    </span>
                </div>
            </div>
        </div> --}}
        <div>
        @if(old('sort', 'asc') != 'best')
        {{--{{ $majors->withQueryString()->links() }}--}}
        @endif
        </div>
    </div>
</div>
</form>
@endsection