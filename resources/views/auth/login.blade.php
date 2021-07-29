@extends('layouts.app')
<title>Login</title>

@section('content')
<div class="container-fluid container-100vh">
    <div class="row justify-content-center">
        <div class="d-flex" style="padding: 0 !important;">
            <div class="imgContainerr container-100vh-only sticky">
                <img src="{{asset('storage/assets/images/login.jpg')}}" alt="image">

            </div>
            <div class="textContainerr container-100vh-only d-flex justify-content-center align-items-center flex-column text-white bg-blue-dark">
                <div class="row text-h2" style="margin-left: 0 !important;">
                    <span class="text-center mb-3">Log In</span>
                </div>
                <div class="row" style="margin-left: 0 !important;">
                    <form method="POST" action="{{ route('login') }}" class="text-16-sb">
                        @csrf
                        <div class="row form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="row form-group ">

                            @if (Route::has('password.request'))
                                <a class="btn btn-white btnLogin" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                        <div class="row ml-0 text-16-r text-white" >
                            <span class="text-center ">Don't have an account? <a class="text-16-sb text-decoration-none text-white" href="{{ route('register') }}">{{ __('Register') }}</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
