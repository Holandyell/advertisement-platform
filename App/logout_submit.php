<?php

include 'config.php';

session_start();
session_unset();
session_destroy();

header("location: ' . _BASE_URL_ . '/index.php?error=emptyinput");
exit ();