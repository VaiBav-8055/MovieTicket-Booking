<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "login_register";
$conn = new mysqli($hostName, $dbUser, $dbPassword, $dbName, 3306);
if (!$conn) {
    die("Something went wrong;");
}

?>