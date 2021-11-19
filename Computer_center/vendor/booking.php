<?php
session_start();
$day = $_POST['day'];
$time_hour = $_POST['time_hour'];
$time_minute= $_POST['time_minute'];
$place = $_POST['place'];

$_SESSION['day'] = $day;
$_SESSION['time_hour'] = $time_hour;
$_SESSION['time_minute'] = $time_minute;
$_SESSION['place'] = $place;

header('Location: ../form_booking.php');
?>