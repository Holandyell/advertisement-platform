<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Advertisement platform</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/example">Advertisements</a>
        <?php if (isset($_SESSION["useruid"])) { ?>
            <li><a href='profile.php'>Profile page</a></li>
            <li><a href='App/logout_submit.php'>Log out</a></li>
        <?php } else { ?>
            <a href="login.php"  class="navbar-brand" style="margin-left:1500px ;">Login</a>
            <a href="signup.php" class="navbar-brand">Sign Up</a>
        <?php } ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
