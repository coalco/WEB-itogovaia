<?php
session_start();
require_once('connect.php');

$name = $_SESSION['user']['name'];
$surname = $_SESSION['user']['surname'];
$login = $_SESSION['user']['login'];
$place = $_SESSION['place'];
$date = $_SESSION['date'];
$time_start = $_SESSION['time_start'];
$time_end = $_SESSION['time_end'];

mysqli_query($connect, "INSERT INTO `booking`(`booking_id`, `name`, `surname`, `login`, `place`, `date`, `time_start`, `time_end`) VALUES (NULL, '$name', '$surname', '$login', '$place', '$date', '$time_start', '$time_end')");
header('Location: ../form_payment.php');
?>