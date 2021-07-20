@extends('layouts.app')
<title>Major assessment result</title>
<style>
   .resultContainer{
       padding: 2rem 10rem !important;
   }

</style>

@section('content')
    <div class="container-100vh bgImg"  style="background-image: url({{asset('storage/assets/bg/bg-result.svg')}});">
        <div class="container-50vh headerContainer">
            <span class="headerTitle text-h2 text-white">Assessment Result</span>
        </div>
        <div class="container-150vh resultContainer bg-white">
            @yield('main')
        </div>

    </div>
@endsection