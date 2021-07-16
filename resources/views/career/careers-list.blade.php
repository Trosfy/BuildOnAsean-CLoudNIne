@extends('layouts.app')
<title>Careers</title>

@section('content')         
<div class="container-100vh d-flex justify-content-center align-content-center align-items-center pHeader" style="background-image: url({{asset('storage/assets/bg-4.svg')}});">
    <div class="imgContainer">
        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="logo" class="imgLanding">

    </div>
    <div class="textContainer">
        <div>
            <span class="text-h2 text-blue-dark">
                Careers 
            </span>
            <br>
            <span class="text-14-r text-white">
                Blanditiis officia voluptate, voluptatem nemo assumenda aliquid velit quia saepe dolorum voluptatum alias ipsam labore cupiditate aperiam corrupti illum dolor. Perspiciatis, quos?
            </span>
        </div>
        <div class="buttonsContainer">
            <button class="btn btn-primary">Start career assessment <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
        </div>
    </div>
</div>

<div class="container-200vh d-flex">
    <div class="left p2">
        <span>Filters</span>
        <div class="filterContainer p2">
            tes
            <br>
            tes
            <br>
            tes
        </div>
    </div>
    <div class="right flex-grow-1 p2">
        <div>
            <form name="myform" action="" method="post">
                <label for="sortby">Sort by</label>
                {{-- <Select onchange="myform.submit()" name="test" id="sortby"> --}}
                <Select name="test" id="sortby">

                    <option value=""></option>
                    <option value="">Alphabetical (A-Z)</option> 
                    <option value="">Alphabetical (Z-A)</option>                   
                    <option value="">Best Match </option> 
                </select>
            </form>
            
        </div>
        <div class="cardContainer shadow">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Health & Counseling</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
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
                    <span class="text-h4 text-blue-dark">
                        Dentist
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">Health & Counseling</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and other dental tissues affecting oral hygiene and retention of teeth. May...
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button>
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