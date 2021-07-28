var currentTab = 0; 

    showTab(currentTab); // Display the current tab

    function showTab(n) {
    // Display the tab
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // Fix the Previous/Next buttons indicator
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";

    } else {
        document.getElementById("nextBtn").innerHTML = "Next ";
        var url = window.location.hostname;
        console.log(url);
        console.log(url+":8000/storage/assets/icons/arrow.svg");
        var img = document.createElement('img');
        img.src = 
        "/storage/assets/icons/arrow.svg";
        img.classList.add("icon");
        img.classList.add("filter-white");
        document.getElementById('nextBtn').appendChild(img);
    }
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

    //If the form is done, then submit
    if (currentTab >= x.length) {
        console.log("submitted" + x.length)

        document.getElementById("prevBtn").style.display = "none";
        document.getElementById("nextBtn").style.display = "none";

        document.getElementById("riasecForm").submit();

        var z = document.getElementsByClassName("completed");
        z[0].style.display = "block";

        return false;
    }

    showTab(currentTab);
    }

    function validateForm() {
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");

        for (i = 0; i < y.length; i++) {
            if (y[i].value == "") {
            y[i].className += " invalid";
            valid = false;
            }
        }
        return valid; // return the valid status
    }


