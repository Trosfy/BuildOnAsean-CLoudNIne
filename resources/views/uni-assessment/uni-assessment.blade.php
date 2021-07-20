@extends('layouts.app')
<title>Major Assessment</title>

@section('content')
<div class="container-100vh flex-center bgImg" style="background-image: url('{{asset('storage/assets/bg/bg-21.png')}};" >
    <div class="text-center headerCareerTest" data-aos="fade-up">
        <span class="text-h2 text-white" >Find your perfect major</span>
        <br>
        <span class="text-14-r text-white">
            We know that choosing a major can be difficult, with so many options and your many varied interests. If you’re not sure what you want to study yet, have no fear. Take our short assessment and find out which majors may be a good fit for you and your future based on your grades and your budget. 
        </span>
        <br>
        <a href="/major-assessment/1">
        <button class="btn btn-primary mt-3">
            Start your free test
        </button>
    </a>
    </div>
</div>
@endsection