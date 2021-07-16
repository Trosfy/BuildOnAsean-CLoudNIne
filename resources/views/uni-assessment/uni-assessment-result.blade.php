@extends('layouts.assessment-result-layout')

@section('main')
<span class="text-h3 mb-4 mt-4">
    Top 3 Result
</span>
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
            <a class="type text-12-sb">Health & Counseling</a>
        </div>
        <div class="cardDesc text-14-r text-darkgrey">
            Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
        </div>
        <div class="cardFooter">
            <button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
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
            <span class="text-14-r text-blue">
                BINUS University
            </span>
            <br>
            <span class="text-h4 text-blue-dark">
                Pendidikan Dokter Gigi
            </span>
        </div>
        <div class="cardType">
            <a class="type text-12-sb">Health & Counseling</a>
        </div>
        <div class="cardDesc text-14-r text-darkgrey">
            Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
        </div>
        <div class="cardFooter">
            <button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
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
            <span class="text-14-r text-blue">
                BINUS University
            </span>
            <br>
            <span class="text-h4 text-blue-dark">
                Pendidikan Dokter Gigi
            </span>
        </div>
        <div class="cardType">
            <a class="type text-12-sb">Health & Counseling</a>
        </div>
        <div class="cardDesc text-14-r text-darkgrey">
            Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
        </div>
        <div class="cardFooter">
            <button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
            <span class="cardTuition text-h4 text-blue-dark">
                Rp 100.000.000
            </span>
        </div>
    </div>
</div>
@endsection