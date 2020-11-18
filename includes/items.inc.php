<?php

if(isset($_POST["submit"])) {
    
    $itemname = $_POST["itemname"];
    $itemdesc = $_POST["itemdesc"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';

    $username = $_SESSION["username"];

    if(emptyInputItem($username, $itemname, $itemdesc) !== false) {
       header("location: ../items.php?error=emptyinput");
       exit();
    }

    addItem($conn, $username, $itemname, $itemdesc);

}

else {
    header("location: ../items.php");
    exit();
}