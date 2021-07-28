@extends('layouts.app')
<title>Pendidikan Dokter Gigi</title>
<style>

</style>
@section('content')
<div class="container-100vh bgImg" style="background-image: url('{{asset('storage/assets/bg/bg-detail.png')}}');">
        <div class=" container-100vh d-flex align-content-end flex-column"  >
            <a id="overview">
                <div class="detailHeader">
                    <nav aria-label="breadcrumb" class="text-12-sb transparent breadcrumb">
                        <ol class="breadcrumb ">
                        <li class="breadcrumb-item "><a href="/" class="text-decoration-none text-green-dark">Home</a></li>
                        <li class="breadcrumb-item "><a href="/majors" class="text-decoration-none text-green-dark">Majors</a></li>
                        <li class="breadcrumb-item active text-green" aria-current="page">Pendidikan Dokter Gigi</li>
                        </ol>
                    </nav> 
                    <span class="text-h2 text-blue-dark">Pendidikan Dokter Gigi</span>
                </div>
            </a>
            <div class="d-flex container-50vh p3 bg-white flex-column-r">
                <div id="toc" class="careerContent text-16-r p2 sticky"data-aos="zoom-in-up">
                    <div class="contentContainer bg-pink-dark text-white shadowPink ">
                        <span class="text-18-sb text-white">
                            Contents
                        </span>
                        <div class="mt-2">
                            <a href="#overview" class="text-decoration-none">1. What they do</a>
                        </div>
                        <div class="mt-2">
                            <a href="#uni" class="text-decoration-none">2. Universities Offering This Degree</a>
                        </div>
                        <div class="mt-2">
                            <a href="#career" class="text-decoration-none">3. Prospective Career</a>
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1 careerDesc order-3-r"data-aos="fade-up">
                    <span class="text-h3 text-green-dark">
                        What Dentists do
                    </span> 
                    <br>
                    <span class="text-14-r text-darkgrey">
                        Counsel and advise individuals and groups to promote optimum mental and emotional health, with an emphasis on prevention. May help individuals deal with a broad range of mental health issues, such as those associated with addictions and substance abuse; family, parenting, and marital problems; stress management; self-esteem; or aging.
                    </span>
                </div>
                <div class="careerJurusan d-flex flex-column p2"data-aos="zoom-in-up">
                    <div class="jurusanContainer shadowBlue">
                        <span class="text-18-sb text-white">
                            Jurusan
                        </span>
                        <br>
                        <span class="text-h3 text-blue-light">
                            IPA
                        </span>
                    </div>
                    <div class="jurusanContainer bg-green-dark shadowGreen mt-3" id="tuition">
                        <span class="text-18-sb text-white">
                            Tuition Fee
                        </span>
                        <br>
                        <span class="text-20-sb text-green-light">
                            Rp 100.000.000
                        </span>
                    </div>
                </div>
            </div>
        </div>


</div>

<a id="uni">
    <div class="container-100vh centerContainer p5 bgImg container-50vh-r" style="background-image: url('{{asset('storage/assets/bg/bg-detail-skills.png')}}');">
        <div class=" container-100vh d-flex justify-content-center flex-column container-50vh-r">
            <div class="d-flex p3 container-100v">
                <div class="careerContent  hidden-r">
                    <div class="contentContainer hidden" >
                    </div>
                </div>
                <div class="flex-grow-1 careerDesc  d-flex justify-content-center flex-column">
                    <span class="text-h3  text-green-dark"data-aos="fade-down">
                        Universities Offering This Degree
                    </span> 
                    <br>
                    <div class="text-center d-flex justify-content-between-r" data-aos="zoom-in-up">
                        <div class="container-fluid">
                            <div class="row">
                              <div class="col-sm-4">
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
                              <div class="col-sm-4">
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
                              <div class="col-sm-4">
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
                              <div class="col-sm-4">
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
            </div>
        </div>
    </div>
</a>

    <div class="container-100vh centerContainer p5 bgImg">

        <div class=" container-100vh d-flex align-content-end flex-column">
            <div class="d-flex p3 container-100vh">
                <div class="careerContent  hidden-r">
                    <div class="contentContainer hidden" >
                    </div>
                </div>
                <div class="flex-grow-1 careerDesc">
                    <a id="career">

                    <span class="text-h3 text-green-dark"data-aos="fade-down">
                        Prospective Career of the Graduates
                    </span> 
                    </a>

                    <br>
                    <div class=" d-flex flex-column">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection