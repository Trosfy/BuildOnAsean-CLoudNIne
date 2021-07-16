<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>Home</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
    </style>

</head>
<body>
    @include('navbar.navbar')
         
    <div class="container-100vh d-flex justify-content-center align-content-center align-items-center pHeader" style="background-image: url({{asset('storage/assets/bg-2.svg')}});">
        <div class="imgContainer">
            <img src="{{asset('storage/assets/icons/search.svg')}}" alt="logo" class="imgLanding">

        </div>
        <div class="textContainer">
            
            <div>
                <span class="text-h1 text-blue-dark">
                    Lorem ipsum dolor, sit amet. 
                </span>
                <br>
                <span class="text-18-r text-darkgrey">
                    Blanditiis officia voluptate, voluptatem nemo assumenda aliquid velit quia saepe dolorum voluptatum alias ipsam labore cupiditate aperiam corrupti illum dolor. Perspiciatis, quos?
                </span>
            </div>
            <div class="buttonsContainer">
                <a href="/major-assessment/1">
                    <button class="btn">Take test</button></a>
                <a href="/about">
                    <button class="btn btn-white">learn more</button>
                </a>
            </div>
        </div>
    </div>

      {{--  --}}
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>





</body>
</html>