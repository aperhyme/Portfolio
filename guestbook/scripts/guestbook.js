document.getElementById("book-form").onsubmit = validate;


function validate() {
    var isValid = true;

    //Clear all error messages
    var errors = document.getElementsByClassName("err");
    for (var i = 0; i < errors.length; i++) {
        errors[i].style.visibility = "hidden";
    }

    //Check first name
    var first = document.getElementById("firstName").value;
    if (first === "") {
        var errFirst = document.getElementById("err-fname");
        errFirst.style.visibility = "visible";
        isValid = false;
    }
    // Check Last name
    var last = document.getElementById("lastName").value;
    if (last === "") {
        var errLast = document.getElementById("err-lname");
        errLast.style.visibility = "visible";
        isValid = false;
    }

    //check for how we meet
    var meet = document.getElementById("meet").value;
    if (meet === "none") {
        var errMeet = document.getElementById("err-meet");
        errMeet.style.visibility = "visible";
        isValid = false;
    }

    var url = document.getElementById("linkedIn").value;
    if(url !=="" && !isValidURL(url)){
        var errURL = document.getElementById("err-url");
        errURL.style.visibility = "visible";
        isValid = false;
    }
    var email = document.getElementById("email").value;
    if (!validateEmail(email)) {
        var errEmail = document.getElementById("err-email");
        errEmail.style.visibility = "visible";
        isValid = false;
    }

    // if mail list selected, requires email
    var method = document.getElementById("list");
    if (email === "" && method.checked) {
        errEmail.style.visibility = "visible";
        isValid = false;
    }

    return isValid;
}

// function that inserts a text box when other is selected
function check(val) {
    if(val==="other") {
        document.getElementById("otherBox").style.display = "block";
    }
    else {
        document.getElementById("otherBox").style.display = "none";
    }

}
// if mail is selected shows email format, and unselected hides the email format
$(document).ready(function(){

    $("#format").css("display","none");

    $("#choose1").on("click", function () {
        if ($("#list").is(":checked"))
        {
            //Show
            $("#format").css("display","block");
        }
        else
        {
            //Hide
            $("#format").css("display","none")
        }
    });
});

function validateEmail(email){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function isValidURL(string) {
    var contains = (string.indexOf('https://www.linkedin.com') > -1);
    return (contains);
}



