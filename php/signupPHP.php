<?php
if (isset($_POST['signup_submit'])) {
    require 'connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordVerify = $_POST['passwordverify'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $date = $_POST['date'];
    $admin = 'user';

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (empty($username) || empty($email) || empty($password) || empty($passwordVerify) || empty($fname) || empty($lname) || empty($date)) {
        //header("Location: ../pages/signup.php?error=emptyfields");
        echo "Empty Fields";
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match('/^[a-zA-Z0-9]*$/', $username)) {
        header("Location: ../pages/signup.php?error=invalidmailuid");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../pages/signup.php?error=invalidmail&uid=" . $username);
        exit();
    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        header("Location: ../pages/signup.php?error=invaliduid&mail=" . $email);
        exit();
    } else if ($password != $passwordVerify) {
        header("Location: ../pages/signup.php?error=passwordcheck&mail=" . $email . "&uid=" . $username);
        exit();
    }
    $sql = "SELECT user_name FROM users WHERE user_name=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../pages/signup.php?error=sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $result = mysqli_stmt_num_rows($stmt);
    if ($result > 0) {
        //header("Location: ../pages/signup.php?error=usertaken&mail=".$email);
        echo "username taken";
        exit();
    }
    $sql = "SELECT user_email FROM users WHERE user_email=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../pages/signup.php?error=sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_store_result($stmt);
    $result = mysqli_stmt_num_rows($stmt);
    if ($result > 0) {
        //header("Location: ../pages/signup.php?error=invalidmail&uid=".$username);
        echo "invalid email";
        exit();
    }
    $sql = "INSERT INTO users (user_name, user_email, user_pwd, user_fname, user_lname, user_date, user_type) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) exit();
    mysqli_stmt_bind_param($stmt, "sssssss", $username, $email, $hashedPassword, $fname, $lname, $date, $admin);
    mysqli_stmt_execute($stmt);
    echo "success";
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
