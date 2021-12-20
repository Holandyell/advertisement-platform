<?php 
include 'Template/html_start.php';
?>

<section style="text-align:center;" class="signup-form">
    <h2>Log In</h2>

    <form action="App/login_submit.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email..."> <br>
        <input type="password" name="pwd" placeholder="Password..."> <br> <br>
        <button type="submit" name="submit">Log In</button>
    </form>
    <?php 
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput"){
            echo "<p>fill in all fields";
        }
        else if ($_GET["error"] == "invalidwronglogin") {
            echo "<p>Incorrect login information!</p>";
        }
    }
    ?>
</section>

<?php 
include 'Template/html_end.php';
