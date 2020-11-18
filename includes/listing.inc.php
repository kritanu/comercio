<?php

if(isset($_POST["submit"])) {
    
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $seller = $_POST["seller"];
    $bid = $_POST["bid"];


    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    match($conn, $username, $email, $phone, $seller, $bid);

}

else {
    header("location: ../listing.php");
    exit();
}