@extends('layouts.app')
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
<title>Career Assessment</title>
<style>
    .tab, .completed {
        display: none;
    }

    .completed{
        border: 2px solid peru;
        text-align: center;
    }
    .imgContainerM{
        width: 50vh !important;
        height: 50vh !important;
        border: 2px solid yellow;
        margin-right: auto;
        margin-left: auto;
    }

</style>

@section('content')
<div class="">
    <div class="container-100vh flex-center bgImg" style="background-image: url({{asset('storage/assets/bg/bg-31.png')}})">
        <div class="text-center headerCareerTest"data-aos="fade-up">
            <span class="text-h2 text-pink-dark">Discover your passion</span>
            <br>
            <span class="text-14-r text-darkgrey">
                What career would best fit your personality? This test will help you explore careers that fit you well. This free career aptitude test can give you insight into your job personality. Based on a characterization of your personality in terms of Holland Code personality types, you will learn what kind of work environments and occupations suit you best. 
            </span>
            <br>
            <a href="/career-assessment-q">        
                <button class="btn btn-primary mt-3">
                    Start your free test
                </button>
            </a>

        </div>
    </div>



</div>

@endsection
