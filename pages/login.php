<?php
session_start();
include '../php/connection.php';
if (isset($_SESSION['userId'])) {
    header("Location:../index.php");
    exit();
} else {
?>
    <?php
    require "../components/header.php";
    ?>

    <body id="backgroundImage">
        <!-- LOGIN Form -->
        <form class="loginContainer" action=" ../php/loginPHP.php" method="post">
            <h1>login</h1>
            <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'nouser') {
            ?>
                    <p class="loginError">User does not exist</p>
                <?php
                } else if ($_GET['error'] == 'wrongpassword') {
                ?>
                    <p class="loginError">Incorrect Password</p>
                <?php
                } else if ($_GET['error'] == 'emptyfields') {
                ?>
                    <p class="loginError">Fields must not be empty</p>
                <?php
                } else {
                ?>
                    <p class="loginError">System error. Please try again</p>
            <?php
                }
            }
            ?>
            <input type="text" name="username" placeholder="Username" id="username">
            <input type="password" name="password" placeholder="Password" id="password">
            <button type="submit" name="login_submit">Login</button>
            <h5>Don't have an account yet? <br /> <a href="signup.php">Register here</a></h5>
        </form>

    </body>

    </html>
<?php
}
require '../components/footer.php';
?>