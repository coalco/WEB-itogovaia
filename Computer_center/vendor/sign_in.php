<?php
    session_start();
    require_once 'connect.php';

    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $check_user = mysqli_query($connect, "SELECT * FROM userlogin WHERE login = '$login' AND password = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
    
        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "login" => $user['login'],
            "admin" => $user['admin']
        ];
        header('Location: ../profile.php');   
    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../form_sign_in.php'); 
    }
?>
<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
