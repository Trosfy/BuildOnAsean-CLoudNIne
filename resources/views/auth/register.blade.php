@extends('layouts.app')
<style>
    .col-md-8{
        /* border: 2px solid black !important; */
    }

    .imgContainerr, .textContainerr{
        /* border: 2px solid plum !important; */
    }
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
    .row{
        /* min-height: 100px !important; */
    }
    .form-control{
        border-radius: 15px !important;
    }
    .form-check{
        margin-bottom: 1rem !important;
    }
    .navbar{
        /* position: fixed !important;
        overflow: hidden !important; */
    }
</style>
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
            <div class="d-flex" style="padding: 0 !important;">
                <div class="imgContainerr">
                    <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                </div>
                <div class="textContainerr">
                    <div class="row text-h2" style="margin-left: 0 !important;">
                        <span class="text-center text-darkblue">Create account</span>
                    </div>
                    <div class="row text-center" style="margin-left: 0 !important;">
                        <span class="text-center">sign in with google</span>
                    </div>
                    <div class="row text-14-r text-center" style="margin-left: 0 !important;">
                        <span class="text-center mb-4">or use your email for registration</span>
                    </div>
                    <div class="row" style="margin-left: 0 !important;">
                        {{-- <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form> --}}
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                          
                                <div class="row text-16-r">
                                    <div class="form-group col-md-6">
                                        <label for="name" class="col-form-label text-md-right">First {{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name" class="col-form-label text-md-right">Last {{ __('Name') }}</label>
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                        @error('name')
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
                                        <label for="email" class="col-form-label text-md-right">Phone Number</label>
        
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
        
                                        @error('email')
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
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                              Male
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                            <label class="form-check-label" for="exampleRadios2">
                                              Female
                                            </label>
                                          </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="birthday">Birthday</label>
                                        <br>
                                        <input type="date" id="birthday" name="birthday" class="form-control">
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
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the Terms Privacy Policy</label>
                                      </div>
                                </div>
                                <div class="row">
                                    <div class="form-group text-center">
                                        {{-- <a class="btn btn-primary">Sign up</a> --}}
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                           
                        </form>

                    </div>
                    <div class="row" style="margin-left: 0 !important;">
                        <span class="text-center">Already have an account? Log In</span>
                    </div>
                </div>
            {{-- <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">

                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
