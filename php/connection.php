<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "13559159248Aa";
$dBName = "MURPHY";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) die("Connection failed: " . mysqli_connect_error());
