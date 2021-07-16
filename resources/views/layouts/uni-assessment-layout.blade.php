@extends('layouts.app')
<title>University/Major Assessment?</title>
<style>
    .uniAssessmentContainer{
        /* border: 2px solid green; */
        /* height: 70vh; */
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
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="d-flex" style="padding: 0 !important;">
                <div class="imgContainerr d-flex flex-column justify-content-center p2 align-items-center">
                    @yield('uniLeft')
                </div>
                <div class="textContainerr d-flex flex-column align-items-center justify-content-center">
                    @yield('uniRight')
                </div>
                    
            </div>
        </div>
    </div>
@endsection