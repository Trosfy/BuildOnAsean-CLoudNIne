
<nav class="navbar navbar-expand-md navbar-light  navbar-fixed-top transparent">
    <div class="container">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none logoContainer navbar-brand">
            <img src="{{asset('storage/assets/icons/logo.svg')}}" alt="logo" class="logo filter-white">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li><a href="/" class="nav-link px-2 text-green-dark-hover">Home</a></li>
                <li><a href="/major-assessment" class="nav-link px-2 text-green-dark-hover">Major Test</a></li>
                <li><a href="/career-assessment" class="nav-link px-2 text-green-dark-hover">Career Test</a></li>
                <li><a href="/majors" class="nav-link px-2 text-green-dark-hover">Majors</a></li>
                <li><a href="/careers" class="nav-link px-2 text-green-dark-hover">Careers</a></li>
              
                {{-- <li><a href="/about" class="nav-link px-2 text-green-dark-hover">About</a></li> --}}
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 searchBar" action="/search" method="GET">
                  <input class="form-control searchInput text-12-sb" type="text" placeholder="Search" value="{{Request::input('query')}}" name="query">
                  <button class="my-2 my-sm-0 searchLogoContainer" type="submit">
                      <img src="{{asset('storage/assets/icons/search.svg')}}" alt="logo" class="logo filter-white">
                  </button>
                </form>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-2 ml-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }},&nbsp;{{ Auth::user()->first_name}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right transparent no-border" aria-labelledby="navbarDropdown">
                            <a class="btn btn-primary dropdown-item text-center" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>