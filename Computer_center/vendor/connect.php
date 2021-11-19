<?php
header('Content-Type: text/html; charset=utf-8');
$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$database = "logindata";
$connect = mysqli_connect($dbserver, $dbusername, $dbpassword, $database);
if (!$connect) {
    die("Error connect to DataBase");
};
?>
