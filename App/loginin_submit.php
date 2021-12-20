<?php

require_once 'config.php';
require_once 'functions.php';

if(isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ' . _BASE_URL_ . '/login.php?error=emptyinput");
        exit();
    } 

    loginUser($conn, $username, $pwd);
} else {
    header("location: ' . _BASE_URL_ . '/login.php");
    exit();
}

