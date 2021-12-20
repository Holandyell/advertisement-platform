<?php

require_once 'App/config.php';
require_once 'App/functions.php';

if(isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    if (emptyInputLogin($username, $pwd) !== false) {
        header("location: ../login.php?error=emptyinput");
        exit();
    } 

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login.php");
    exit();
}

