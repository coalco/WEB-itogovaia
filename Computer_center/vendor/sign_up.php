<?php
    session_start();
    require_once('connect.php');

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `userlogin` (`id`, `name`, `surname`, `login`, `password`) VALUES (NULL, '$name', '$surname', '$login', '$password')");
        $_SESSION['message'] = 'Регистрация завершена!';
        header('Location: ../form_sign_in.php');
    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../form_sign_up.php');
    }
?>