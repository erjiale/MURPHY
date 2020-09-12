<?php
if (isset($_POST['login_submit'])) { // check if POST Request sent by login_submit name value
    require 'connection.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        header("Location: ../pages/login.php?error=emptyfields");
        exit();
    }
    $sql = "SELECT * FROM users WHERE user_name=?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../pages/login.php?sqlerror");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($result)) {
        $passwordCheck = password_verify($password, $row['user_pwd']);
        if ($passwordCheck == false) {
            echo "Wrong Password";
            header("Location: ../pages/login.php?error=wrongpassword");
            exit();
        } else if ($passwordCheck == true) {
            session_start();
            $_SESSION['userId'] = $row['user_id'];
            header("Location: ../index.php");
            exit();
        }
    } else {
        header("Location: ../pages/login.php?error=nouser");
        exit();
    }
}
