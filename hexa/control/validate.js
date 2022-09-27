document.getElementById("fname").addEventListener('keyup', function() {

    if (document.getElementById("fname").value == "") {
        document.getElementById("errorfname").innerHTML =
            "Please fill out First Name";

    } else if (/^[a-zA-Z]+$/.test(document.getElementById("fname").value) == false) {
        document.getElementById("errorfname").innerHTML = "Inavalid First Name";

    } else {
        document.getElementById("errorfname").innerHTML = "";
    }
});

document.getElementById("lname").addEventListener("keyup", function() {
    if (document.getElementById("lname").value == "") {
        document.getElementById("errorlname").innerHTML =
            "Please fill out Last Name";

    } else if (
        /^[a-zA-Z]+$/.test(document.getElementById("lname").value) == false
    ) {
        document.getElementById("errorlname").innerHTML = "Inavalid Last Name";
    } else {
        document.getElementById("errorlname").innerHTML = "";
    }
});

document.getElementById("uname").addEventListener("keyup", function() {
    if (document.getElementById("uname").value == "") {
        document.getElementById("erroruname").innerHTML =
            "Please fill out Username";

    } else if (
        /^[a-zA-Z]+[0-9]*$/.test(document.getElementById("uname").value) == false
    ) {
        document.getElementById("erroruname").innerHTML = "Inavalid Username";
    } else {
        document.getElementById("erroruname").innerHTML = "";
    }
});

document.getElementById("age").addEventListener("keyup", function() {
    if (document.getElementById("age").value == "") {
        document.getElementById("errorage").innerHTML =
            "Please fill out Age";

    } else if (/^[0-9]+$/.test(document.getElementById("age").value) == false) {
        document.getElementById("errorage").innerHTML = "Inavalid Age";
    } else if (document.getElementById("age").value < 18 || document.getElementById("age").value > 70) {
        document.getElementById("errorage").innerHTML = "Age Must be between 18 to 70";


    } else {

        document.getElementById("errorage").innerHTML = "";
    }
});

document.getElementById("email").addEventListener("keyup", function() {
    if (document.getElementById("email").value == "") {
        document.getElementById("erroremail").innerHTML = "Please fill out Email";
    } else if (
        /^\S+@\S+[.]\S+$/.test(document.getElementById("email").value) == false
    ) {
        document.getElementById("erroremail").innerHTML = "Inavalid Email Format";
        console.log("alalalalal");
    } else {
        document.getElementById("erroremail").innerHTML = "";
    }
});

document.getElementById("password").addEventListener("keyup", function() {
    if (document.getElementById("password").value == "") {
        document.getElementById("errorpassword").innerHTML =
            "Please fill out Password";
    } else if (
        /^(?!.*\s)(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[!@#$%^&*().]).{8,}$/.test(document.getElementById("password").value) == false
    ) {
        document.getElementById("errorpassword").innerHTML =
            "Inavalid Password Format";

    } else {
        document.getElementById("errorpassword").innerHTML = "";
    }
});





document.getElementById("nid").addEventListener("keyup", function() {
    if (document.getElementById("nid").value == "") {
        document.getElementById("errornid").innerHTML =
            "Please fill out Nid";
    } else if (/^[+0-9]{13}$/.test(document.getElementById("nid").value) == false) {
        document.getElementById("errornid").innerHTML = "Inavalid Nid Format";
    } else {
        document.getElementById("errornid").innerHTML = "";
    }
});
document.getElementById("contact").addEventListener("keyup", function() {
    if (document.getElementById("contact").value == "") {
        document.getElementById("errorcontact").innerHTML = "Please fill out contact";
    } else if (/^[+0-9]{11}$/.test(document.getElementById("contact").value) == false) {
        document.getElementById("errorcontact").innerHTML = "Inavalid contact";
    } else {
        document.getElementById("errorcontact").innerHTML = "";
    }
});

document.getElementById("language").addEventListener("keyup", function() {
    if (document.getElementById("language").value == "") {
        document.getElementById("errorlanguage").innerHTML =
            "Please fill out Language";

    } else if (/^[a-zA-Z]+$/.test(document.getElementById("language").value) == false) {
        document.getElementById("errorlanguage").innerHTML = "Inavalid Language Format";
    } else {
        document.getElementById("errorlanguage").innerHTML = "";
    }
});