<?php

require_once 'config.php';
require_once 'functions.php';


function redirectUser($param = null) {
    $url = _BASE_URL_ . '/signup.php';
    if ($param) {
        $url = $url . '?' . $param;
    }
    header("location: ' . _BASE_URL_ . '/signup.php?error=emptyinput");
    exit;
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $emil = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];


    if (emptyInputSignup($name, $emil, $username, $pwd, $pwdrepeat) !== false) {
        redirectUser('error=emptyinput');
    }

    if (invalidUid($username) !== false) {
        redirectUser('error=invaliduid');
    }

    if (invalidEmail($emil) !== false) {
        redirectUser('error=invaliduid');
    }

    if (pwdMatch($pwd, $pwdrepeat) !== false) {
        redirectUser('error=passwordsdontmatch');
    }

    if (uidExist($conn, $username, $emil) !== false) {
        redirectUser('error=usernametaken');
    }
    createUser($conn, $name, $emil, $username, $pwd);
} else {
    redirectUser();
}
