<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    };
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style/style_1.css">
</head>
<body>
<?php
    if (!isset($_SESSION['user'])) {
        require_once("header/header.php");      
    } else {
        require_once("header/headerlogin.php");
    };
?>
<div>
    <form action="vendor/sign_in.php" method="post" class="form_log_in">
        <table width="100%">
            <caption>Вход</caption>
            <tr>
                <tr>
                    <td width="30%">Введите логин:</td>
                    <td>
                        <input type="text" class="sign_up" name="login">
                    </td>
                </tr>
                <tr>
                    <td>Введите пароль:</td>
                    <td>
                        <input type="password" class="sign_up" name="password">
                    </td>
                </tr>
                <tr colspan="2">
                    <td  colspan="2" align="center">
                        <button type="submit" class="log_button">Войти</button>
                    </td>
                </tr>
            </tr>
        </table>
        <?php
            if (isset($_SESSION['message'])){
                echo '<p> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</div>
</body>
</html>
