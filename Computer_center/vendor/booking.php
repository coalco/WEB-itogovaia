<?php
session_start();
require_once('connect.php');

$day = $_POST['day'];
$time_hour = $_POST['time_hour'];
$time_minute= $_POST['time_minute'];
$place = $_POST['place'];
$hour = $_POST['hour'];

$name = $_SESSION['user']['name'];
$surname = $_SESSION['user']['surname'];
$login = $_SESSION['user']['login'];

$end_time_hour = $time_hour + $hour;
$time_start = strval($time_hour).':'.strval($time_minute);
$time_end = strval($end_time_hour).':'.strval($time_minute);
$date =  $day;

$_SESSION['place']=$place;
$_SESSION['date']=$date;
$_SESSION['time_start']=$time_start;
$_SESSION['time_end']=$time_end;

#mysqli_query($connect, "INSERT INTO `booking`(`booking_id`, `name`, `surname`, `login`, `place`, `date`, `time_start`, `time_end`) VALUES (NULL, '$name', '$surname', '$login', '$place', '$date', '$time_start', '$time_end')");

header('Location: ../form_payment.php');
?>
