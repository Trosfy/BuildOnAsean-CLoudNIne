@extends('layouts.assessment-result-layout')
<title>Major Assessment Result</title>

@section('main')
<span class="text-h3 mb-4 mt-4 text-green-dark">
    Top 3 Result
</span>
@foreach ($major_result as $result)
    <div class="cardContainer shadow"data-aos="zoom-in-up">
        <div class="cardImgContainer">
            <img src="{{asset('storage/assets/dentist.png')}}" alt="image">
        </div>
        <div class="cardTextContainer w-100">
            <div class="cardTitle">
                <span class="text-14-r text-blue-dark">
                    {{-- BINUS University --}}
                    {{$result->university_name}}
                </span>
                <br>
                <span class="text-h4 text-blue-dark">
                    {{-- Pendidikan Dokter Gigi --}}
                    {{$result->trans_name}}
                </span>
            </div>

            <div class="cardType">
                @if($result->stream_science == 1)
                    <a class="type text-12-sb">Science</a>
                @endif
                @if($result->stream_social == 1)
                    <a class="type text-12-sb">Social</a>
                @endif
            </div>

            <div class="cardDesc text-14-r text-darkgrey">
                {{-- Examine, diagnose, and treat diseases, injuries, and malformations of teeth and gums. May treat diseases of nerve, pulp, and ... --}}
                @if(strlen($result->other_major)>0)
                    Also available in: {{$result->other_major}}
                @endif
            </div>
            <div class="cardFooter">
                <a href="/major/{{$result->id}}" class="text-decoration-none text-white"><button class="btn btn-primary text-12-sb">Read more <img src="{{asset('storage/assets/icons/arrow.svg')}}" alt="" class="icon filter-white"></button></a>
                <span class="cardTuition text-h4 text-blue-dark">
                    {{-- Rp 100.000.000 --}}
                    {{$result->budget}}
                </span>
            </div>
        </div>
    </div>
@endforeach

@endsection