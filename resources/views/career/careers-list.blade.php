@extends('layouts.app')
<title>Careers</title>

@section('content')         
<div class="container-100vh d-flex justify-content-center align-content-center align-items-center pHeader flex-column-r container-65vh-r pt-4-r" style="background-image: url({{asset('storage/assets/bg/bg-51.svg')}});">
    <div class="imgContaine" data-aos="zoom-in-right">
        <img src="{{asset('storage/assets/illustrations/career-1.svg')}}" alt="logo" class="imgLanding">

    </div>
    <div class="textContainer center-r"data-aos="zoom-in-left">
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
<form method="POST" action="/careers" class="text-14-sb" name="myform">
<div class="container-200vh d-flex p2 bg-pink-light justify-content-center">
    <div class="left p2">
        {{-- <span>Filters</span> --}}
        <div class="filterContainer p2 mt-5 shadowGreen">
            
                @csrf
                <div class="form-group mb-0">
                    <span class="text-16-sb">Major</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == 'all' ? 'checked' : ''}} value="all" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="rType">
                           All
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == "Pendidikan Dokter Gigi" ? 'checked' : ''}} value="Pendidikan Dokter Gigi" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="rType">
                            Pendidikan Dokter Gigi
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == "Teknik Informatika" ? 'checked' : ''}} value="Teknik Informatika" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="rType">
                            Teknik Informatika
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == "Bisnis" ? 'checked' : ''}} value="Bisnis" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="rType">
                            Bisnis 
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rType" id="rType" {{ old('rType', 'all') == "Kedokteran" ? 'checked' : ''}} value="Kedokteran" onclick="myform.submit()">
                        <label class="form-check-label text-14-r" for="rType">
                            Kedokteran
                        </label>
                    </div>
                </div>
            
        </div>
    </div>
    <div class="right p2">
        <div>
            <!-- <form name="myform" action="" method="post"  class="text-14-sb"> -->
                <label for="sortby" class="text-white">Sort by </label>
                <Select onchange="myform.submit()" name="sort" id="sortby" class="p1 ml-2">
                <!-- <Select name="test" id="sortby" class="p1 ml-2"> -->
                    <option value="asc" {{ old('sort', 'asc') == 'asc' ? 'selected' : '' }}>Alphabetical (A-Z)</option> 
                    <option value="desc"{{ old('sort', 'asc') == 'desc' ? 'selected' : '' }}>Alphabetical (Z-A)</option>       
                    @if(Auth::user() && Auth::user()->riasec != null && Auth::user()->api_result != null)            
                        <option value="best" {{ old('sort', 'asc') == 'best' ? 'selected' : '' }}>Best Match </option> 
                    @endif
                </select>
            <!-- </form> -->
            
        </div>
        @foreach($careers as $career)
        <div class="cardContainer shadow"data-aos="zoom-in-up">
            <div class="cardImgContainer">
                <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
            </div>
            <div class="cardTextContainer">
                <div class="cardTitle">
                    <span class="text-h4 text-blue-dark mt-4">
                        {{$career->jobtitle}}
                    </span>
                </div>
                <div class="cardType">
                    <a class="type text-12-sb">{{$career->major_name}}</a>
                </div>
                <div class="cardDesc text-14-r text-darkgrey">
                    {{Str::of($career->overview)->words(40, ' . . .')}}
                </div>
                <div class="cardFooter">
                    <button class="btn btn-primary btnRightt text-12-sb"><a href="/career/{{$career->id}}" class="text-decoration-none text-white">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></a></button>
                    {{-- <span class="cardTuition text-h4">
                        Rp 100.000.000
                    </span> --}}
                </div>
            </div>
        </div>
        @endforeach

        <div>
            {{--{{ $careers->withQueryString()->links() }}--}}
        </div>
    </div>
</div>
</form>


@endsection