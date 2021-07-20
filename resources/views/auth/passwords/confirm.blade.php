@extends('layouts.app')

@section('content')
<div class="container-fluid bgImg" style="background-image: url({{asset('storage/assets/bg/bg-61.svg')}})">
    <div class="row container-100vh justify-content-center">
        <div class="col-md-8 d-flex justify-content-center flex-column  align-items-center">
            <div class="card forgetCard bg-green-light shadowGreen">
                <div class="row text-h3 mt-5" style="margin-left: 0 !important;">
                    <span class="text-center text-blue-dark">{{ __('Confirm Password') }}</span></div>
                    <div class="card forgetCard bg-green-light">
                        <div class="card-body text-center">
                            {{ __('Please confirm your password before continuing.') }}
        
                            <form method="POST" action="{{ route('password.confirm') }}">
                                @csrf
        
                                <div class="form-group row  mt-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-right text-black text-16-sb">{{ __('Password') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0 justify-content-center">
                                    <div class="col-md-8">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Confirm Password') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-white text-blue-dark mt-3" style="color: var(--color-blue-dark) !important;" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                
                    </div>

            </div>

        </div>
    </div>
</div>
@endsection
