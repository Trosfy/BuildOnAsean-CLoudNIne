@extends('layouts.app')
<title>Major assessment result</title>
<style>
   .resultContainer{
       padding: 2rem 10rem !important;
   }
</style>

@section('content')
    <div class="container-200vh">
        <div class="container-50vh headerContainer">
            <img src="{{asset('storage/assets/bg-1.svg')}}" alt="ini gambar" class="headerImg">
            <span class="headerTitle text-h2 text-white">Assessment Result</span>
        </div>
        <div class="container-150vh resultContainer">

            {{-- <div class="cardContainer shadow">
                <div class="cardImgContainer">
                    <img src="{{asset('storage/assets/icons/search.svg')}}" alt="gambar" class="cardImg">
                </div>
                <div class="cardTextContainer">
                    <div class="cardTitle text-h4">
                        Pendidikan Dokter Gigi
                    </div>
                    <div class="cardType">
                        <button class="btn btn-primary text-12-sb">Health & Counseling</button>
                    </div>
                    <div class="cardDesc text-14-r">
                        Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
                    </div>
                    <div class="cardFooter">
                        <button class="btn btn-primary text-12-sb">Read more</button>
                        <span class="cardTuition text-h4">
                            Rp 100.000.000
                        </span>
                    </div>
                </div>
            </div>
            <div class="cardContainer shadow">
                <div class="cardImgContainer">
                    <img src="{{asset('storage/assets/icons/search.svg')}}" alt="gambar" class="cardImg">
                </div>
                <div class="cardTextContainer">
                    <div class="cardTitle text-h4">
                        Pendidikan Dokter Gigi
                    </div>
                    <div class="cardType">
                        <button class="btn btn-primary text-12-sb">Health & Counseling</button>
                    </div>
                    <div class="cardDesc text-14-r">
                        Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
                    </div>
                    <div class="cardFooter">
                        <button class="btn btn-primary text-12-sb">Read more</button>
                        <span class="cardTuition text-h4">
                            Rp 100.000.000
                        </span>
                    </div>
                </div>
            </div>
            <div class="cardContainer shadow">
                <div class="cardImgContainer">
                    <img src="{{asset('storage/assets/icons/search.svg')}}" alt="gambar" class="cardImg">
                </div>
                <div class="cardTextContainer">
                    <div class="cardTitle text-h4">
                        Pendidikan Dokter Gigi
                    </div>
                    <div class="cardType">
                        <button class="btn btn-primary text-12-sb">Health & Counseling</button>
                    </div>
                    <div class="cardDesc text-14-r">
                        Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
                    </div>
                    <div class="cardFooter">
                        <button class="btn btn-primary text-12-sb">Read more</button>
                        <span class="cardTuition text-h4">
                            Rp 100.000.000
                        </span>
                    </div>
                </div>
            </div> --}}
            @yield('main')
        </div>

    </div>
@endsection