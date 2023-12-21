<?php
$fullname = $_POST['name'];
$username = $_POST['username'];
$password_person = $_POST['password'];
$confirm_pass = $_POST['confirmpass'];
$email = $_POST['email'];
$confirm_email = $_POST['confirmemail'];
$social_fb = $_POST['socialfb'];
$social_x = $_POST['socialx'];

include "conection.php";

$insert = "INSERT INTO person (fullname, username, password_person, confirm_pass, email, confirm_email, social_fb, social_x) VALUES ('$fullname', '$username', '$password_person', '$confirm_pass', '$email', '$confirm_email', '$social_fb', '$social_x')";

if ($conection -> query($insert) == true) {
    header('location: ../index.php');
} else {
    echo "Error saving data in DB";
}

$conection -> close();

?>