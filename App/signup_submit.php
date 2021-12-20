<?php

require_once 'App/config.php';
require_once 'App/functions.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emil = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];


    if (emptyInputSignup($name, $emil, $username, $pwd, $pwdrepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if (invalidUid($username) !== false) {
        header("location: ../signu.php?error=invaliduid");
        exit();
    }

    if (invalidEmail($emil) !== false) {
        header("location: ../signu.php?error=invalidemail");
        exit();
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        header("location: ../signu.php?error=passwordsdontmatch");
        
    }

    if (uidExist($conn, $username, $emil) !== false) {
        header("location: ../signu.php?error=usernametaken");
        exit();
    }
    createUser($conn, $name, $emil, $username, $pwd);
} else {
    header("location: ../signup.php");
    exit();
}
