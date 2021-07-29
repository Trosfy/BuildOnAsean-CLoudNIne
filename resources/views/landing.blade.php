@extends('layouts.app')
<title>Home</title>
<style>

</style>

@section('content')
<div class="container-100vh d-flex justify-content-center align-content-center align-items-center pHeader flex-column-r " style="background-image: url({{asset('storage/assets/bg/bg-11.png')}});">
    <div class="imgContainer mt-4">
        <img src="{{asset('storage/assets/illustrations/home-1.svg')}}" alt="logo" class="imgLanding" data-aos="fade-down">

    </div>
    <div class="textContainer center-r mt-4"data-aos="fade-down">
        
        <div>
            <span class="text-h1 text-green-light">
                Plan your next step with us 
            </span>
            <br>
            <span class="text-14-r text-white">
                We know that choosing a major can be difficult, with so many options and your many varied interests. If you’re not sure what you want to study yet, have no fear. Take our short assessment and find out which majors may be a good fit for you and your future based on your grades and your budget. 
            </span>
        </div>
        <div class="mt-4">
            <a href="/major-assessment/1">
                <button class="btn">Take test</button></a>
            <a href="#features" class="btn btn-white">
                learn more
            </a>
        </div>
    </div>
</div>

<a id="features">

<div class="container-100vh bg-blue-dark bgImg d-flex justify-content-center align-items-center container-auto-r"style="background-image: url({{asset('storage/assets/bg/bg-12.png')}});"  >
    <div class="d-flex flex-column justify-content-center align-items-center p5 w-75  bg-green-light border-50 shadowGreen min-h-75">
        <span class="text-h3 text-blue-dark"data-aos="fade-down">Our Features</span>
        <div class="d-flex align-items-center justify-content-around w-100 mt-4  flex-column-r">
            <div class="kotak" data-aos="zoom-in-down">
                <img src="{{asset('storage/assets/illustrations/home-11.svg')}}" alt="" class="imgSquareMini mt-3 mb-3">
                <br>
                <span class="text-16-sb mt-2 text-blue-dark">Find your recommended major</span>
                <br>
                <span class="text-12-r mt-2 text-white">If you're  confused about what you should major in, our application can give you recommendations based on your personal data.</span>
            </div>
            <div class="kotak"data-aos="zoom-in-down">
                <img src="{{asset('storage/assets/illustrations/home-12.svg')}}" alt="" class="imgSquareMini mt-3 mb-3">
                <br>
                <span class="text-16-sb mt-2 text-blue-dark">Discover your passion and interests </span>
                <br>
                <span class="text-12-r mt-2 text-white">Have you ever wondered what kind of job suits you? Take our free career test to discover jobs that matches your passion and interests.</span>
            </div>
            <div class="kotak"data-aos="zoom-in-down">
                <img src="{{asset('storage/assets/illustrations/home-13.svg')}}" alt="" class="imgSquareMini mt-3 mb-3">
                <br>
                <span class="text-16-sb mt-2 text-blue-dark">Make informed decision for your future</span>
                <br>
                <span class="text-12-r mt-2 text-white">With our assessments, you can make informed decision about your future and plan ahead!</span>
            </div>
        </div>
    </div>
</div>

</a>

<div class="container-100vh d-flex justify-content-center align-items-center bgImg container-55vh-r " style="background-image: url({{asset('storage/assets/bg/bg-131.svg')}});">
    <div class="d-flex w-75 justify-content-center align-items-center" data-aos="zoom-in-down">
        <div class="w-50 d-flex justify-content-between flex-column">
            <div class="d-flex justify-content-between flex-column-reverse-r align-items-end-r">
                <div class="flex-grow-1 text-right p2">
                    <span class="text-16-sb text-blue-dark">Create your profile</span>
                    <br>
                    <span class="text-12-r text-white">To access our assessment, you need to create a new account or sign in to your existing account.</span>                    
                    </div>
                <div class="p2">
                    <img src="{{asset('storage/assets/step-1-active.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset('storage/assets/illustrations/home-21.svg')}}" alt="image" class="imgSquareBig ml-3">
        </div>
    </div>
</div>

<div class="container-100vh d-flex justify-content-center align-items-center bgImg container-55vh-r " style="background-image: url({{asset('storage/assets/bg/bg-132.svg')}});">
    <div class="d-flex w-75 justify-content-center align-items-center"data-aos="zoom-in-down">
        <div>
            <img src="{{asset('storage/assets/illustrations/home-22.svg')}}" alt="image" class="imgSquareBig mr-3">
        </div>
        <div class="w-50 d-flex justify-content-between flex-column ">
            <div class="d-flex justify-content-between flex-column-r">
                <div class="p2">
                    <img src="{{asset('storage/assets/step-2-active.svg')}}" alt="">
                </div>
                <div class="flex-grow-1 p2">
                    <span class="text-16-sb text-blue-dark">Take the assessments</span>
                    <br>
                    <span class="text-12-r text-white">There are 2 kinds of assessments you can take for free, a major assessment and a career assessment.</span>                    
                    </div>

            </div>
        </div>

    </div>
</div>


<div class="container-100vh d-flex justify-content-center align-items-center  bgImg container-55vh-r " style="background-image: url({{asset('storage/assets/bg/bg-133.svg')}});">
    <div class="d-flex w-75 justify-content-center align-items-center"data-aos="zoom-in-down">
        <div class="w-50 d-flex justify-content-between flex-column">
            <div class="d-flex justify-content-between flex-column-reverse-r align-items-end-r">
                <div class="flex-grow-1 text-right p2">
                    <span class="text-16-sb text-blue-dark">Get recommendations</span>
                    <br>
                    <span class="text-12-r text-white">After completing the assessments, you wil receive recommendations which can be helpful for your future education decisions.</span>                    
                    </div>
                <div class="p2">
                    <img src="{{asset('storage/assets/step-3-active.svg')}}" alt="">
                </div>
            </div>
        </div>
        <div>
            <img src="{{asset('storage/assets/illustrations/home-23.svg')}}" alt="image" class="imgSquareBig ml-3">
        </div>
    </div>
</div>

<div class="aa container-100vh d-flex justify-content-center align-items-center bgImg container-auto-r" style="background-image: url({{asset('storage/assets/bg/bg-14.svg')}});">
    <div class="d-flex w-75 justify-content-around align-items-center flex-column-r">
        <div class="border-50 bg-blue-dark cardd d-flex justify-content-around align-items-center flex-column p5 min-h-50  mb-2-r w-75-r" data-aos="zoom-in-up">
            <img src="{{asset('storage/assets/illustrations/home-31.svg')}}" alt="image" style="object-fit: contain;" class="imgSquare">

            <div >
                <span class="text-h4 text-pink-light">Major Assessment</span>
            </div>
            <div>
                <a href="/major-assessment" class="btn btn-primary mt-3">Take test</a>
            </div>
        </div>
        <div class="border-50 bg-blue-dark cardd d-flex justify-content-around align-items-center flex-column p5 min-h-50 mb-2-r  w-75-r" data-aos="zoom-in-up">
            <img src="{{asset('storage/assets/illustrations/home-32.svg')}}" alt="image" style="object-fit: contain;" class="imgSquare">

            <div >
                <span class="text-h4 text-pink-light">Career Assessment</span>
            </div>
            <div>
                <a href="/career-assessment" class="btn btn-primary mt-3">Take test</a>
            </div>
        </div>
    </div>
</div>

@endsection