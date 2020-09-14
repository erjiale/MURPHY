<?php
session_start();
include '../php/connection.php';
if (isset($_SESSION['userId']) || isset($_SESSION['adminId'])) {
    header("Location:../index.php");
    exit();
} else {
?>
    <?php
    require "../components/header.php"
    ?>

    <body id="headerSlideShow">
        <div class="row-container">
            <!-- SIGNUP Form -->
            <form class="registerContainer" action="../php/signupPHP.php" method="post">
                <h1>Signup</h1>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'emptyfields') {
                ?>
                        <p class="loginError">Fill in the fields</p>
                    <?php
                    } else if ($_GET['error'] == 'usertaken') {
                    ?>
                        <p class="loginError">Username taken</p>
                    <?php
                    } else if ($_GET['error'] == 'mailtaken') {
                    ?>
                        <p class="loginError">Email taken</p>
                    <?php
                    } else if ($_GET['error'] == 'passwordcheck') {
                    ?>
                        <p class="loginError">Password does not match</p>
                <?php
                    }
                }
                ?>
                <input type="text" name="fname" placeholder="First Name" id="fname">
                <input type="text" name="lname" placeholder="Last Name" id="lname">
                <input type="date" id="date" placeholder="Date of Birth" name="date" min="1950-01-01" max="">
                <input type="text" name="username" placeholder="Enter Username" id="username">
                <input type="text" name="email" placeholder="Enter Email" id="email">
                <input type="password" name="password" placeholder="Enter Password" id="password">
                <input type="password" name="passwordverify" placeholder="Re-enter Password" id="passwordverify">
                <button type="submit" name="signup_submit">Signup</button>
                <h5>Already have an account? <br /><a href="login.php">Login here</a></h5>
            </form>
        </div>
    </body>
<?php
}
require "../components/footer.php";
?>