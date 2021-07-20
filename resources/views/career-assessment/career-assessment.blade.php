@extends('layouts.app')
{{-- <script src="{{ asset('js/script.js') }}"></script> --}}
<title>Career Assessment</title>
<style>
    .tab, .completed {
        display: none;
    }

    .completed{
        border: 2px solid peru;
        text-align: center;
    }
    .imgContainerM{
        width: 50vh !important;
        height: 50vh !important;
        border: 2px solid yellow;
        margin-right: auto;
        margin-left: auto;
    }

</style>

@section('content')
<div class="">
    <div class="container-100vh flex-center bgImg" style="background-image: url({{asset('storage/assets/bg/bg-31.png')}})">
        <div class="text-center headerCareerTest"data-aos="fade-up">
            <span class="text-h2 text-pink-dark">Discover your passion</span>
            <br>
            <span class="text-14-r text-darkgrey">
                What career would best fit your personality? This test will help you explore careers that fit you well. This free career aptitude test can give you insight into your job personality. Based on a characterization of your personality in terms of Holland Code personality types, you will learn what kind of work environments and occupations suit you best. 
            </span>
            <br>
            <a href="/career-assessment-q">        
                <button class="btn btn-primary mt-3">
                    Start your free test
                </button>
            </a>

        </div>
    </div>



</div>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    // fixStepIndicator(n)
    }

    function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        console.log("submitted" + x.length)

        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "none";

        // document.getElementById("regForm").submit();

        var z = document.getElementsByClassName("completed");
        z[0].style.display = "block";

        var element = document.getElementById("qContainer");
        element.classList.add("container-100vh");
        element.classList.remove("container-200vh");
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
    }

    function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    // if (valid) {
    //     document.getElementsByClassName("step")[currentTab].className += " finish";
    // }
    return valid; // return the valid status
    }

    // function fixStepIndicator(n) {
    // // This function removes the "active" class of all steps...
    // var i, x = document.getElementsByClassName("step");
    // for (i = 0; i < x.length; i++) {
    //     x[i].className = x[i].className.replace(" active", "");
    // }
    // //... and adds the "active" class on the current step:
    // x[n].className += " active";
    // }
</script>
@endsection
