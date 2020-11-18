<?php

include_once 'dbh.inc.php';

function emptyInputRegistration($username, $email, $phone, $password, $password2) {
    $result;
    if(empty($username) || empty($email) || empty($phone) || empty($password) || empty($password2)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/" , $username)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL )) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function passwordMatch($password, $password2) {
    $result;
    if($password !== $password2) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $phone, $password) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersPhone, usersPassword) VALUES (?, ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registration.php?error=stmtfailed2");
        exit();
    }
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $phone, $hashedPassword);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
    header("location: ../registration.php?error=none");
    exit();
}


function emptyInputLogin($username, $password) {
    $result;
    if(empty($username) || empty($password)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $password) {
    $uidExists = uidExists($conn, $username, $email);

    if($uidExists === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $hashedPassword = $uidExists["usersPassword"];
    $checkPassword = password_verify($password, $hashedPassword);

    if($checkPassword === false) {
        header("location: ../login.php?error=incorrectpass");
        exit();
    }

    else if($checkPassword === true) {
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersName"];
        $_SESSION["email"] = $uidExists["usersEmail"];
        $_SESSION["phone"] = $uidExists["usersPhone"];

        header("location: ../index.php");
        exit();
    }
}


function emptyInputItem($itemname, $itemdesc) {
    $result;
    if(empty($itemname) || empty($itemdesc)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function addItem($conn, $username, $itemname, $itemdesc) {
    $sql = "INSERT INTO item ( usersName, itemName, itemDesc) VALUES ( ?, ?, ?) ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../items.php?error=stmtfailed2");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sss", $username, $itemname, $itemdesc);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
    header("location: ../items.php?error=none");
    exit();
}