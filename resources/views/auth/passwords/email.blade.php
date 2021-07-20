@extends('layouts.app')
<style>

</style>
@section('content')
<div class="container-fluid bgImg" style="background-image: url({{asset('storage/assets/bg/bg-61.svg')}})">
    <div class="row container-100vh justify-content-center">
        <div class="col-md-8 d-flex justify-content-center flex-column  align-items-center">
            <div class="card forgetCard bg-green-light shadowGreen">
                <div class="row text-h2 mt-5" style="margin-left: 0 !important;">
                    <span class="text-center text-blue-dark">{{ __('Reset Password') }}</span>
                </div>
                <div class="card forgetCard bg-green-light">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
    
                            <div class="form-group row d-flex justify-content-center">
                                <label for="email" class="col-md-4 col-form-label text-md-right text-black text-16-sb">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control text-16-sb @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row mb-0 text-center">
                                <div class="col-md-6 ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
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
