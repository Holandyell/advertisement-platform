<?php 
include 'Template/html_start.php';
?>

<section style="text-align:center;" class="signup-form">
    <h2>Sign Up</h2>

    <form action="signupInc.php"  method="POST">
        <input type="text"  name="name" placeholder="Full name..."> <br>
        <input type="text" name="email" placeholder="Email..."> <br>
        <input type="text" name="uid" placeholder="Username..."> <br>
        <input type="text" name="pwd" placeholder="Password..."> <br>
        <input type="text" name="pwdrepeat" placeholder="Repeat Password..."> <br> <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput"){
            echo  "<p>fill in all fields";
        }
        else if ($_GET["error"] == "invaliduid") {
            echo "<p>chose a proper username!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>chose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>pssword doesnt match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username alredy taken!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>you have sign up!</p>";
        }
    }
    ?>
</section>

<?php 
include 'Template/html_end.php';
?>




