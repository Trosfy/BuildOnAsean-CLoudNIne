@extends('layouts.app')
<title>Career Details</title>
<style>

</style>
@section('content')
<div class="container-100vh" style="background-image: url('{{asset('storage/assets/bg-1.svg')}}');background-size: contain;'">
    <div class=" container-100vh d-flex align-content-end flex-column"  >
        <div class="detailHeader">
            <nav aria-label="breadcrumb" class="text-12-sb transparent breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Career</li>
                </ol>
              </nav> 
            <span class="text-h2">Dentist</span>
        </div>
        <div class="d-flex container-50vh p3 bg-white">
            <div class="careerContent text-16-sb p2">
                <div class="contentContainer" >
                    <span class="text-18-sb text-blue">
                        Contents
                    </span>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        What they do
                    </div>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        Job description
                    </div>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        Skills
                    </div>
                    <div class="mt-2 text-blue-dark">
                        <img src="{{asset('storage/assets/icons/search.svg')}}" alt="image">
                        Personality
                    </div>

                </div>
            </div>
            <div class="flex-grow-1 careerDesc">
                <span class="text-h3 text-green-dark">
                    What Dentists do
                </span> 
                <br>
                <span class="text-14-r text-darkgrey">
                    Counsel and advise individuals and groups to promote optimum mental and emotional health, with an emphasis on prevention. May help individuals deal with a broad range of mental health issues, such as those associated with addictions and substance abuse; family, parenting, and marital problems; stress management; self-esteem; or aging.
                </span>
            </div>
            <div class="careerJurusan p2">
                <div class="jurusanContainer">
                    <span class="text-18-sb text-blue">
                        Jurusan
                    </span>
                    <br>
                    <span class="text-h3 text-blue-dark">
                        IPA
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-100vh centerContainer p5">
    <div class="w-50">
        <span class="text-h3 text-green-dark">
            On the job, a dentist would...
        </span>
        <br>
        <span class="text-14-r text-darkgrey">
            Maintain confidentiality of records relating to clients' treatment.
            Encourage clients to express their feelings and discuss what is happening in their lives, helping them to develop insight into themselves or their relationships.
            Collect information about clients through interviews, observation, or tests.
        </span>
    </div>

</div>
<div class="container-100vh centerContainer p5">
    <div class="w-50">
        <span class="text-h3 text-green-dark">
            Skills
        </span>
        <br>
        <span class="text-16-sb text-green">
            Basic Skills
        </span>
        <br>
        <span class="text-14-r text-darkgrey">
            listening to others, not interrupting, and asking good questions
            talking to others
        </span>
        <br>
        <br>
        <span class="text-16-sb text-green">
            Social Skills
        </span>
        <br>
        <span class="text-14-r text-darkgrey">
            understanding people's reactions
            looking for ways to help people
        </span>
        <br>
        <br>
        <span class="text-16-sb text-green">
            People and Technology Systems Skills
        </span>
        <br>
        <span class="text-14-r text-darkgrey">
            thinking about the pros and cons of different options and picking the best one
            measuring how well a system is working and how to improve it
        </span>
    </div>
   
</div>
<div class="container-100vh centerContainer p5">
    <div class="w-50">
        <span class="text-h3 text-green-dark">
            Personality
        </span>
        <br>
        <span class="text-14-r text-darkgrey">
            People interested in this work like activities that include helping people, teaching, and talking.
            <br>
            <br>
            They do well at jobs that need:
            <br>
            Self Control
            <br>
            Concern for Others
            <br>
            Integrity
            <br>
            Stress Tolerance
            <br>
            Dependability
            <br>
            Cooperation
        </span>
    </div>
</div>
@endsection