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
    <title>Регистрация</title>
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
    <div class="panel_2" >
        <form action="vendor/sign_up.php" method="post" class="form_sign_up" enctype="multipart/form-data">
            <table width="100%">
                <caption>Регистрация</caption>
                <tr>
                    <tr>
                        <td width="30%">Введите Имя:</td>
                        <td>
                            <input type="text" class="sign_up" name="name" >
                        </td>
                    </tr>
                    <tr>
                        <td>Введите Фамилию:</td>
                        <td>
                            <input type="text" class="sign_up" name="surname" >
                        </td>
                    </tr>
                    <tr>
                        <td>Введите логин:</td>
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
                    <tr>
                        <td>Подтвердите пароль:</td>
                        <td>
                            <input type="password" class="sign_up" name="password_confirm">
                        </td>
                    </tr>
                    <tr colspan="2">
                        <td  colspan="2" align="center">
                            <button type="submit" class="log_button">Зарегистрироватся</button>
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