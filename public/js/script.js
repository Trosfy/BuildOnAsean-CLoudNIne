var inc = 2;
var currentTab = 0; // Current tab is set to be the first tab (0)
var riasec_answers = [];

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

        // document.getElementById("nextBtn").addEventListener('click',postForm);
    } else {
        document.getElementById("nextBtn").innerHTML = "Next ";
        var url = window.location.hostname;
        console.log(url);
        console.log(url+":8000/storage/assets/icons/arrow.svg");
        // document.getElementById("btnImg").src = url+":8000/storage/assets/icons/arrow.svg";
        var img = document.createElement('img');
        img.src = 
        "/storage/assets/icons/arrow.svg";
        img.classList.add("icon");
        img.classList.add("filter-white");
        document.getElementById('nextBtn').appendChild(img);
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
    //buat ngambil atribut name dari input
    var y = "0";
    var z = currentTab+inc;
    y = document.getElementsByTagName('input')[z].getAttribute('name'); //r1
    // inputan = document.getElementsByTagName('input');
    // console.log(inputan);
    console.log(y);
    inc = inc  + 1;
    console.log(inc);
    getChecked(y);
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        console.log("submitted" + x.length)

        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "none";

        document.getElementById("riasecForm").submit();

        var z = document.getElementsByClassName("completed");
        z[0].style.display = "block";

        // var element = document.getElementById("qContainer");
        // element.classList.add("container-100vh");
        // element.classList.remove("container-200vh");
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


    function getChecked(nomor){
        var b = document.getElementsByName(nomor)[0];
        var value ="";
        if(b.checked){
            value = b.value;
            riasec_answers.push(value);
        }
        else{
            value = "0"
        }
        // x = $('input[name=`nomor`]:checked').val();
        console.log(riasec_answers);
    }

    function postForm(){

        $.ajax({
            type: "POST",
            url: "/get-riasec-data",
            data: JSON.stringify({checked:riasec_answers}),
            success: function(data){
                windows.location.href = '/showResult';
                console.log("sukses???????????????");

            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(textStatus+ " + " +XMLHttpRequest+ " + " +errorThrown )
             },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'json',
          });
        console.log("kepanggil");
    }


