@extends('layouts.app')
<title>Career Details</title>
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
                    <li class="breadcrumb-item "><a href="/careers" class="text-decoration-none text-green-dark">Career</a></li>
                    <li class="breadcrumb-item active text-green" aria-current="page">{{$career->jobtitle}}</li>
                    </ol>
                </nav> 
                <span class="text-h2 text-blue-dark">{{$career->jobtitle}}</span>
            </div>
        </a>
        <div class="d-flex container-50vh p3 bg-white flex-column-r">
            <div id="toc" class="careerContent text-16-r p2 sticky">
                <div class="contentContainer bg-pink-dark text-white shadowPink"data-aos="zoom-in-up">
                    <span class="text-18-sb text-white">
                        Contents
                    </span>
                    <div class="mt-2">
                        <a href="#overview" class="text-decoration-none">
                            1. What they do                     
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="#desc" class="text-decoration-none">
                        2. Job description</a>
                    </div>
                    <div class="mt-2">
                        <a href="#skills" class="text-decoration-none">
                        3. Skills</a>
                    </div>
                    <div class="mt-2">
                        <a href="#personality" class="text-decoration-none">
                        4. Personality</a>
                    </div>
                </div>
            </div>
            <div class="flex-grow-1 careerDesc order-3-r"data-aos="fade-up">
                <span class="text-h3 text-green-dark">
                    What {{$career->jobtitle}} do
                </span> 
                <br>
                <span class="text-14-r text-darkgrey">
                    {{$career->overview}}
                </span>
            </div>
            <div class="careerJurusan p2" data-aos="zoom-in-up">
                <div class="jurusanContainer shadowBlue">
                    <span class="text-18-sb text-white">
                        Major
                    </span>
                    <br>
                    <a href="/major/1" class="text-decoration-none ">
                        <span class="text-h4 text-blue-light">
                            {{$major['trans-name']}}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<a id="desc">
    <div class="container-100vh centerContainer p5 bgImg container-auto-r " style="background-image: url('{{asset('storage/assets/bg/bg-detail-jobdesc.png')}}');">
        <div class="w-50" data-aos="fade-up">
            <span class="text-h3 text-green-dark">
                On the job, a {{$career->jobtitle}} would...
            </span>
            <br>
            <span class="text-14-r text-darkgrey">
                {{$career->jobdesc}}
            </span>
        </div>
    
    </div>
</a>

<a id="skills">
    <div class="container-100vh centerContainer p5 bgImg container-auto-r" style="background-image: url('{{asset('storage/assets/bg/bg-detail-skills.png')}}');">
        <div class="w-50"data-aos="fade-up">
            <span class="text-h3 text-green-dark">
                Skills
            </span>
            <br>
            <span class="text-16-sb text-green">
                @if($career->basicskill)
                    Basic Skills
                @endif
            </span>
            <br>
            <span class="text-14-r text-darkgrey">
                {{$career->basicskill}}
            </span>
            <br>
            <br>
            <span class="text-16-sb text-green">
                @if($career->socialskill)
                Social Skills
                @endif
            </span>
            <br>
            <span class="text-14-r text-darkgrey">
                {{$career->socialskill}}
            </span>
            <br>
            <br>
            <span class="text-16-sb text-green">
                @if($career->peopleskill)
                People and Technology Systems Skills
                @endif
            </span>
            <br>
            <span class="text-14-r text-darkgrey">
                {{$career->peopleskill}}
            </span>
        </div>
       
    </div>
</a>

<a id="personality">
    <div class="container-100vh centerContainer p5 bgImg container-auto-r" style="background-image: url('{{asset('storage/assets/bg/bg-detail-personality.png')}}');">        
        <div class="w-50"data-aos="fade-up">
            <span class="text-h3 text-green-dark">
                @if($career->personality)
                Personality
                @endif
            </span>
            <br>
            <span class="text-14-r text-darkgrey">
                {{$career->personality}}
            </span>
        </div>
    </div>
</a>

@endsection