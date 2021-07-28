@extends('layouts.assessment-result-layout')
<title>Career Assessment Result</title>
<style>

</style>

@section('main')
<span class="text-h3 mb-4 mt-4 text-blue-dark">
    Top 3 Result
</span>
<div class="cardContainer shadow"data-aos="zoom-in-up">
    <div class="cardImgContainer">
        <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
    </div>
    <div class="cardTextContainer w-100">
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
    <div class="cardTextContainer w-100">
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
    <div class="cardTextContainer w-100">
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

{{-- <button class="btn btn-primary btnRight">
    See all
</button> --}}
@endsection