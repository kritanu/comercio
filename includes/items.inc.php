<?php

if(isset($_POST["submit"])) {
    
    $itemname = $_POST["itemname"];
    $itemdesc = $_POST["itemdesc"];
    $username = $_POST["usr"];

    include_once 'dbh.inc.php';
    include_once 'functions.inc.php';



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