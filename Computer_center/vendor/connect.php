<?php
header('Content-Type: text/html; charset=utf-8');
$connect = new mysqli("localhost", "root", "", "logindata");
if (!$connect) {
    die("Error connect to DataBase");
};
?>
