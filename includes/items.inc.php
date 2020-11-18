<?php

if(isset($_POST["submit"])) {
    
    $itemname = $_POST["itemname"];
    $itemdesc = $_POST["itemdesc"];
    $itemprice = $_POST["itemprice"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';



    if(emptyInputItem($itemname, $itemdesc, $itemprice) !== false) {
       header("location: ../items.php?error=emptyinput");
       exit();
    }

    addItem($conn, $username, $email, $phone, $itemname, $itemdesc, $itemprice);

}

else {
    header("location: ../items.php");
    exit();
}