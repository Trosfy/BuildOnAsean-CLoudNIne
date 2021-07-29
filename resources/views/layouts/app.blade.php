<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/landing.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="shortcut icon" href="{{asset('storage/assets/icons/logo.svg')}}" type="image/x-icon">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,700,900');
    </style>
</head>
<body>
    @include('navbar.navbar')

    <div id="app">
        <main class="py-4" style="padding-top: 0 !important; padding-bottom: 0 !important">
            @yield('content')
        </main>
    </div>

    <div class="footer bg-green-light">
        <div class="d-flex justify-content-between align-items-center p2">
            <div class="d-flex flex-column justify-content-end">
                <a href="/" class="text-decoration-none">
                    <img src="{{asset('storage/assets/icons/logo.svg')}}" alt="" class="filter-white logo ml-3">
                <span class="ml-3 text-14-sb mt-2 text-white">mynextstep</span>
            </a>
            </div>
            <div class="d-flex mr-5">
                <div class="text-white text-14-sb">
                    <a href="/majors"class="text-decoration-none text-white">Majors</a>
                    <br>
                    <a href="/careers"class="text-decoration-none text-white">Careers</a>
                </div>
                {{-- <div class="ml-5 mr-5  text-14-sb">
                    <a href="/about"class="text-decoration-none text-white">About Us</a>
                    <br>
                    <a href="/faq"class="text-decoration-none text-white">FAQs</a>
                </div> --}}
            </div>
        </div>
        <div class="mt-auto text-center p1 text-white">
            © CloudNine - BuildOn ASEAN 2021
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">        
    $(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

                var scroll = $(window).scrollTop();
                var $toc = document.getElementById('toc');

                if (scroll >= 500) {                    
                    $toc.classList.add("scrolled");
                } else{
                    $toc.classList.remove("scrolled");
                }


            });
            });
            $(document).ready(function(){
                AOS.init({
                duration: 1000,
                })
            });

    </script>
</body>
@yield('script')
</html>
