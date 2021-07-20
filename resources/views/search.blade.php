@extends('layouts.app')

@section('content')
<div class="container-50vh bgImg d-flex flex-column justify-content-center align-items-center" style="background-image: url({{asset('storage/assets/bg/bg-search.png')}})">
    <span class="text-h3 text-pink-dark text-center">Search results</span>
    <br>
    <span class="text-14-r">We found
        <span class="text-14-sb"> 5 </span>
        results for
        <span class="text-14-sb"> "dokter" </span>
        !
    </span>

</div>
<div class="container-200vh d-flex p2 bg-pink-light justify-content-center">
    <div class="left p2">
        {{-- <span>Filters</span> --}}
        <div class="filterContainer p2 mt-5 shadowGreen">
            <form method="POST" action="{{ route('register') }}" class="text-14-sb">
                @csrf
                <div class="form-group col-md-6 mb-0">
                    <span class="text-16-sb">Type</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioAll" value="option1" checked>
                        <label class="form-check-label text-14-r" for="radioAll">
                            All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioCareer" value="option2">
                        <label class="form-check-label text-14-r" for="radioCareer">
                            Careers
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="radioMajor" value="option3">
                        <label class="form-check-label text-14-r" for="radioMajor">
                            Majors
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
            <div class="cardTextContainer">
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
            <div class="cardTextContainer">
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
            <div class="cardTextContainer">
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
            <div class="cardTextContainer">
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
        <div>
            Pagination
        </div>
    </div>
</div>
@endsection