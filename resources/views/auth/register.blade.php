@extends('layouts.app')
<title>Register</title>
<style>
    .imgContainerr{
        height: 90vh;
        width: 30vw;
        /* position: fixed; */
    }
    .textContainerr{
        /* height: 90vh; */
        width: 70vw;
        /* margin-left: 30vw !important; */
        padding: 2rem 5rem !important;
    }
    .col-md-2, .col-md-6{
        /* border: 2px solid blue !important; */
        height: auto !important;
    }

    .form-control{
        border-radius: 15px !important;
    }
    .form-check{
        margin-bottom: 1rem !important;
    }

</style>
@section('content')
<div class="container-fluid container-100vh">
    <div class="row justify-content-center">
        <div class="d-flex" style="padding: 0 !important;">
            <div class="imgContainerr container-100vh-only sticky">
                <img src="{{asset('storage/assets/images/registration.jpg')}}" alt="image">
            </div>
            <div class="textContainerr container-100vh-only d-flex justify-content-center align-items-center flex-column text-white bg-blue-dark">
                <div class="row text-h2 mt-5" style="margin-left: 0 !important;">
                    <span class="text-center text-darkblue mb-3">Create account</span>
                </div>
              
                <div class="row" style="margin-left: 0 !important;">
                        <form method="POST" action="{{ route('register') }}" class="text-14-sb">
                            @csrf
                          
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="first_name" class="col-form-label text-md-right">First {{ __('Name') }}</label>
                                        <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
    
                                        @error('first_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="last_name" class="col-form-label text-md-right">Last {{ __('Name') }}</label>
                                        <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
    
                                        @error('last_name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="phone" class="col-form-label text-md-right">Phone Number</label>
        
                                        <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">
        
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        Gender
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              Male
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
                                            <label class="form-check-label" for="exampleRadios2">
                                              Female
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="dob">Birthday</label>
                                        <br>
                                        <input type="date" id="dob" name="dob" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
    
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-check text-center">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the Terms Privacy Policy</label>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="form-group text-center mt-3">
                                        {{-- <a class="btn btn-primary">Sign up</a> --}}
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                           
                        </form>

                    </div>
                    <div class="row ml-0 text-16-r text-white" >
                        <span class="text-center ">Already have an account? <a class="text-16-sb text-decoration-none text-white" href="{{ route('login') }}">{{ __('Login') }}</a></span>
                    </div>
                </div>
        </div>
    </div>
</div>
@endsection
