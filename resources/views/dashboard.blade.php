@extends('layouts.app')
<style>

</style>
@section('content')
<div class="container-50vh d-flex  align-items-end bgImg"  style="background-image: url({{asset('storage/assets/bg/bg-user.png')}});">
    <div class="mb-5 ml-5 d-flex  align-items-center justify-content-around ">
        <img src="{{asset('storage/assets/illustrations/user.svg')}}" alt="" class="imgSquareM">
        <span class="text-h2 text-blue-dark ml-3">Hi, User!</span>
    </div>
    
</div>
<div class="container-100vh d-flex p2 justify-content-center">
    <div class="right p2">
        <div>
            <span class="text-h4 text-blue-dark">Recommended Major</span>
        </div>
        <div class="cardContainer shadow">
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
        <div class="cardContainer shadow">
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
        <div class="cardContainer shadow">
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
    </div>
</div>

<div class="container-100vh d-flex p2 justify-content-center">
    <div class="right p2">
        <div>
            <span class="text-h4 text-blue-dark">Recommended Careers</span>
        </div>
        <div class="cardContainer shadow">
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
        <div class="cardContainer shadow">
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
        <div class="cardContainer shadow">
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
    </div>
</div>
@endsection