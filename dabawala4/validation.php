<?php
$value = $_GET['query'];
$formfield = $_GET['field'];
// Check Valid or Invalid first name when user enters user name in username input field.
if ($formfield == "firstname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid last name when user enters user name in username input field.
if ($formfield == "lastname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid address when user enters user name in username input field.
if ($formfield == "address") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "username") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "password") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "contact") {
if (!preg_match('/^(NA|[0-9+-]+)$/' , $value)) {
echo "Invalid contact no";
} else {
echo "<span>Valid</span>";
}
}
?>