<?php

if(isset($_POST["submit"])) {
    
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if(emptyInputRegistration($username, $email, $phone, $password, $password2) !== false) {
        header("location: ../registration.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username) !== false) {
        header("location: ../registration.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email, $phone) !== false) {
        header("location: ../registration.php?error=invalidemail");
        exit();
    }
    if(passwordmatch($password, $password2) !== false) {
        header("location: ../registration.php?error=pwdnomatch");
        exit();
    }
    if(uidExists($conn, $username, $email) !== false) {
       header("location: ../registration.php?error=usernametaken");
       exit();
    }
    createUser($conn,$username, $email, $phone, $password);

}

else {
    header("location: ../registration.php");
    exit();
}