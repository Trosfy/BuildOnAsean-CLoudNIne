@extends('layouts.app')
<title>Careers</title>

@section('content')         
<div class="container-100vh d-flex justify-content-center align-content-center align-items-center pHeader" style="background-image: url({{asset('storage/assets/bg/bg-51.svg')}});">
    <div class="imgContaine" data-aos="zoom-in-right">
        <img src="{{asset('storage/assets/illustrations/career-1.svg')}}" alt="logo" class="imgLanding">

    </div>
    <div class="textContainer"data-aos="zoom-in-left">
        <div>
            <span class="text-h2 text-white">
                Careers 
            </span>
            <br>
            <span class="text-14-r text-white">
                Whether you choose to find a job or begin postgraduate study, there are a number of routes you can take after university. Explore your career options and see where your degree could take you.
            </span>
        </div>
        <div class="buttonsContainer mt-3">
            <a href="/career-assessment"><button class="btn btn-primary">Start career assessment <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
        </div>
    </div>
</div>

<div class="container-200vh d-flex p2 bg-pink-light justify-content-center">
    <div class="left p2">
        {{-- <span>Filters</span> --}}
        <div class="filterContainer p2 mt-5 shadowGreen">
            <form method="POST" action="{{ route('register') }}" class="text-14-sb">
                @csrf
                <div class="form-group mb-0">
                    <span class="text-16-sb">Major</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioAll" value="option1" checked>
                        <label class="form-check-label text-14-r" for="radioAll">
                            All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioCareer" value="option2">
                        <label class="form-check-label text-14-r" for="radioCareer">
                            Pendidikan Dokter Gigi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioMajor" value="option3">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            Teknik Informatika
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioMajor" value="option3">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            Bisnis 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioMajor" value="option3">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            Kedokteran
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="right p2">
        <div>
            <form name="myform" action="" method="post"  class="text-14-sb">
                <label for="sortby" class="text-white">Sort by </label>
                {{-- <Select onchange="myform.submit()" name="test" id="sortby"> --}}
                <Select name="test" id="sortby" class="p1 ml-2">
                    <option value="">Alphabetical (A-Z)</option> 
                    <option value="">Alphabetical (Z-A)</option>                   
                    <option value="">Best Match </option> 
                </select>
            </form>
            
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark mt-4">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Pendidikan Dokter Gigi</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/1" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    {{-- <span class="cardTuition text-h4">
                        Rp 100.000.000
                    </span> --}}
                </div>
            </div>
        </div>
        <div class="cardContainer shadow" data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark mt-4">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Pendidikan Dokter Gigi</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/1" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    {{-- <span class="cardTuition text-h4">
                        Rp 100.000.000
                    </span> --}}
                </div>
            </div>
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark mt-4">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Pendidikan Dokter Gigi</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/1" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    {{-- <span class="cardTuition text-h4">
                        Rp 100.000.000
                    </span> --}}
                </div>
            </div>
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark mt-4">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Pendidikan Dokter Gigi</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/1" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    {{-- <span class="cardTuition text-h4">
                        Rp 100.000.000
                    </span> --}}
                </div>
            </div>
        </div>
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark mt-4">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Pendidikan Dokter Gigi</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/1" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    {{-- <span class="cardTuition text-h4">
                        Rp 100.000.000
                    </span> --}}
                </div>
            </div>
        </div>
        <div>
            Pagination
        </div>
    </div>
</div>



@endsection