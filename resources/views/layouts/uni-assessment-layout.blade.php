@extends('layouts.app')
<title>University/Major Assessment?</title>
<style>
    .uniAssessmentContainer{
        width: 100%;
    }
    .formUni{
        /* height: 70vh; */
        width: 100%;

        display: flex;
        justify-content: space-between;
        flex-direction: column;
    }
    .a{
        height: 55vh !important;
    }
    .imgContainerr{
        padding: 5rem 5rem !important;
        text-align: center !important;
    }

</style>

@section('content')
    <div class="container-fluid bgImg" style="background-image: url({{asset('storage/assets/bg/bg-22.svg')}})">
        <div class="row justify-content-center container-100vh">
            <div class="d-flex" style="padding: 0 !important;">
                <div class="uniLeft">
                    <div class="container-100vh imgContainerr d-flex flex-column justify-content-center p3 align-items-center sticky uniLeft" style="width: 30vw !important;">
                        @yield('uniLeft')
                    </div>
    
                </div>
                <div class="container-100vh textContainerr d-flex flex-column align-items-center justify-content-center uniRight">
                    @yield('uniRight')
                </div>
                    
            </div>
        </div>
    </div>
@endsection