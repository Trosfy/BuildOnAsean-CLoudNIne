@extends('layouts.app')
<title>Career Details</title>
<style>

</style>
@section('content')
<div class="container-100vh bgImg" style="background-image: url('{{asset('storage/assets/bg/bg-detail.png')}}');">
    <div class=" container-100vh d-flex align-content-end flex-column"  >
        <a id="overview">
            <div class="detailHeader">
                <nav aria-label="breadcrumb" class="text-12-sb transparent breadcrumb">
                    <ol class="breadcrumb ">
                    <li class="breadcrumb-item "><a href="/" class="text-decoration-none text-green-dark">Home</a></li>
                    <li class="breadcrumb-item "><a href="/careers" class="text-decoration-none text-green-dark">Career</a></li>
                    <li class="breadcrumb-item active text-green" aria-current="page">Dentist</li>
                    </ol>
                </nav> 
                <span class="text-h2 text-blue-dark">Dentist</span>
            </div>
        </a>
        <div class="d-flex container-50vh p3 bg-white flex-column-r">
            <div id="toc" class="careerContent text-16-r p2 sticky">
                <div class="contentContainer bg-pink-dark text-white shadowPink"data-aos="zoom-in-up">
                    <span class="text-18-sb text-white">
                        Contents
                    </span>
                    <div class="mt-2">
                        <a href="#overview" class="text-decoration-none">
                            1. What they do                     
                        </a>
                    </div>
                    <div class="mt-2">
                        <a href="#desc" class="text-decoration-none">
                        2. Job description</a>
                    </div>
                    <div class="mt-2">
                        <a href="#skills" class="text-decoration-none">
                        3. Skills</a>
                    </div>
                    <div class="mt-2">
                        <a href="#personality" class="text-decoration-none">
                        4. Personality</a>
                    </div>
                </div>
            </div>
            <div class="flex-grow-1 careerDesc order-3-r"data-aos="fade-up">
                <span class="text-h3 text-green-dark">
                    What Dentists do
                </span> 
                <br>
                <span class="text-14-r text-darkgrey">
                    Counsel and advise individuals and groups to promote optimum mental and emotional health, with an emphasis on prevention. May help individuals deal with a broad range of mental health issues, such as those associated with addictions and substance abuse; family, parenting, and marital problems; stress management; self-esteem; or aging.
                </span>
            </div>
            <div class="careerJurusan p2" data-aos="zoom-in-up">
                <div class="jurusanContainer shadowBlue">
                    <span class="text-18-sb text-white">
                        Jurusan
                    </span>
                    <br>
                    <a href="/major/1" class="text-decoration-none ">
                        <span class="text-h4 text-blue-light">
                            Pendidikan Dokter Gigi
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<a id="desc">
    <div class="container-100vh centerContainer p5 bgImg container-auto-r " style="background-image: url('{{asset('storage/assets/bg/bg-detail-jobdesc.png')}}');">
        <div class="w-50" data-aos="fade-up">
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
</a>

<a id="skills">
    <div class="container-100vh centerContainer p5 bgImg container-auto-r" style="background-image: url('{{asset('storage/assets/bg/bg-detail-skills.png')}}');">
        <div class="w-50"data-aos="fade-up">
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
</a>

<a id="personality">
    <div class="container-100vh centerContainer p5 bgImg container-auto-r" style="background-image: url('{{asset('storage/assets/bg/bg-detail-personality.png')}}');">        
        <div class="w-50"data-aos="fade-up">
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
</a>

@endsection