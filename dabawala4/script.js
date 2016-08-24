function checkForm() {
// Fetching values from all input fields and storing them in variables.
var fname = document.getElementById("firstname1").value;
var lname = document.getElementById("lastname1").value;
var address = document.getElementById("adress1").value;
var name = document.getElementById("username1").value;
var password = document.getElementById("password1").value;
var email = document.getElementById("email1").value;
var contact = document.getElementById("contact1").value;
//Check input Fields Should not be blanks.
if (fname == '' || lname == '' || address == '' || name == '' || password == '' || email == '' || contact == '') {
alert("Fill All Fields");
} else {
//Notifying error fields
var firstname1 = document.getElementById("firstname");
var lastname1 = document.getElementById("lastname");
var address1 = document.getElementById("address");
var username1 = document.getElementById("username");
var password1 = document.getElementById("password");
var email1 = document.getElementById("email");
var contact1 = document.getElementById("contact");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (firstname1.innerHTML == 'Must be 3+ letters' || lastname1.innerHTML == 'Must be 3+ letters' ||address1.innerHTML == 'Must be 3+ letters' || username1.innerHTML == 'Must be 3+ letters' || password1.innerHTML == 'Password too short' || email1.innerHTML == 'Invalid email' || contact1.innerHTML == 'Invalid contact') {
alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}