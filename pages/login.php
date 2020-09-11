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