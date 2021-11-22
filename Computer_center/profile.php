<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: form_sign_in.php');
    };
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Профиль</title>
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
<div class="panel_1">
        <?php
        echo '<p class="text_panel"> Ваш id: ' . $_SESSION['user']['id'] . '</p>  ';
        echo '<p class="text_panel"> Ваше имя и фамилия: ' . $_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname'] . '</p>';
        echo '<p class="text_panel"> Ваш логин: ' . $_SESSION['user']['login'] . '</p>  ';
        ?>
</div>
</body>
</html>
