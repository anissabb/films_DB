<?php
//First line of the script to acess the session
session_start();


// 1. Obtain login and password by using $_POST and assigning it to variables


$login = $_POST['login'];
$password = $_POST['password'];


//the login and pass have to be retrieved in DB and verified
// exercise:

$DB_login = "wad";
$DB_pass = 2022;


if ($login == $DB_login && $password == $DB_pass){
    $_SESSION['loginOk'] = $login;      //we assign value of $login to $_SESSION['loginOk']
    header ('location: ./home.php');    // and then we use header() function to redirect toward specific LOCATION
}
else {
    header ('location: ./login.php?error=badPass');   //if login/pass is incorrect we display message
}




?>