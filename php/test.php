<?php
require 'connection.php';

//CAMBIA ESTO Y LUEGO ABRE ESTE FILE EN EL BROWSER
//Temporary Signup data
$id = 1;
$username = 'erjiale';
$fname = 'Jay';
$lname = 'Q';
$date = '1998-11-16';
$admin = 'admin';
$password = 'hello123';
$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user_name, user_pwd, user_fname, user_lname, user_date, user_type) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    exit();
} else {
    mysqli_stmt_bind_param($stmt, "ssssss", $username, $hashedPwd, $fname, $lname, $date, $admin);
    mysqli_stmt_execute($stmt);
}
