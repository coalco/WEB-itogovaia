<?php
    session_start();
    require_once('connect.php');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `userlogin` (`id`, `first_name`, `last_name`, `login`, `password`) VALUES (NULL, '$first_name', '$last_name', '$login', '$password')");
        $_SESSION['message'] = 'Регистрация завершена!';
        header('Location: ../form_sign_in.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../form_sign_up.php');
    }
?>