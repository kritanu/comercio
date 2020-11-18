<?php

if(isset($_POST["submit"])) {
    
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $itemname = $_POST["itemname"];
    $seller = $_POST["seller"];
    $bid = $_POST["bid"];


    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    if(emptyInputMatch($bid) !== false) {
        header("location: ../listing.php?error=emptyinput");
        exit();
    }

    match($conn, $username, $email, $phone, $itemname, $seller, $bid);

}

else {
    header("location: ../listing.php");
    exit();
}