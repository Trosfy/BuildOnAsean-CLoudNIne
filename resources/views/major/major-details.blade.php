@extends('layouts.app')
<title>Major Detail</title>
<style>

</style>
@section('content')
<div class="container-100vh" style="background-image: url('{{asset('storage/assets/bg-1.svg')}}');background-size: contain;'">
    <div class=" container-100vh d-flex align-content-end flex-column"  >
        <div class="detailHeader">
            <nav aria-label="breadcrumb" class="text-12-sb transparent breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Major</li>
                </ol>
              </nav> 
            <span class="text-h2 text-blue-dark">Pendidikan Dokter Gigi</span>
        </div>
        <div class="d-flex container-50vh p3 bg-white">
            <div class="careerContent text-16-sb p2">
                <div class="contentContainer" >
                    <span class="text-18-sb text-blue">
                        Contents
                    </span>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        What they do
                    </div>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        Job description
                    </div>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        Skills
                    </div>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        Personality
                    </div>

                </div>
            </div>
            <div class="flex-grow-1 careerDesc">
                <span class="text-h3 text-green-dark">
                    What Dentists do
                </span> 
                <br>
                <span class="text-14-r text-darkgrey">
                    Counsel and advise individuals and groups to promote optimum mental and emotional health, with an emphasis on prevention. May help individuals deal with a broad range of mental health issues, such as those associated with addictions and substance abuse; family, parenting, and marital problems; stress management; self-esteem; or aging.
                </span>
            </div>
            <div class="careerJurusan p2">
                <div class="jurusanContainer">
                    <span class="text-18-sb text-blue">
                        Jurusan
                    </span>
                    <br>
                    <span class="text-h3 text-blue-dark">
                        IPA
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-100vh">
    <div class=" container-100vh d-flex align-content-end flex-column">
        <div class="d-flex p5 container-100vh">
            <div class="careerContent">
                <div class="contentContainer hidden" >
                </div>
            </div>
            <div class="flex-grow-1 careerDesc">
                <span class="text-h3  text-green-dark">
                    Universities Offering This Degree
                </span> 
                <br>
                <div class="text-center d-flex">
                    <div class="cardPContainer shadow">
                        <div class="cardPImgContainer">
                            <img src="{{asset('storage/assets/binus.jpg')}}" alt="image">
                        </div>
                        <div class="cardTextContainer">
                            <div class="cardPTextTitle text-16-sb text-blue-dark">
                                BINUS University
                            </div>
                            <br>
                            <div >
                                <button class="btn btn-primary">Visit website</button>
                            </div>
                        </div>
                    </div>
                    <div class="cardPContainer shadow">
                        <div class="cardPImgContainer">
                            <img src="{{asset('storage/assets/binus.jpg')}}" alt="image">
                        </div>
                        <div class="cardTextContainer">
                            <div class="cardPTextTitle text-16-sb text-blue-dark">
                                BINUS University
                            </div>
                            <br>
                            <div >
                                <button class="btn btn-primary">Visit website</button>
                            </div>
                        </div>
                    </div>
                    <div class="cardPContainer shadow">
                        <div class="cardPImgContainer">
                            <img src="{{asset('storage/assets/binus.jpg')}}" alt="image">
                        </div>
                        <div class="cardTextContainer">
                            <div class="cardPTextTitle text-16-sb text-blue-dark">
                                BINUS University
                            </div>
                            <br>
                            <div >
                                <button class="btn btn-primary">Visit website</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-100vh">
    <div class=" container-100vh d-flex align-content-end flex-column">
        <div class="d-flex p5 container-100vh">
            <div class="careerContent">
                <div class="contentContainer hidden" >
                </div>
            </div>
            <div class="flex-grow-1 careerDesc">
                <span class="text-h3 text-green-dark">
                    Prospective Career of the Graduates
                </span> 
                <br>
                <div>
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
        </div>
    </div>
</div>
@endsection