<?php
    session_start();
    if (!$_SESSION['user']) {
        header('Location: form_sign_in');
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
        <a href="vendor/log_out.php">log out</a>
        <p><?php
        echo $_SESSION['user']['login']; 
        ?><p>
</div>
</body>
</html>
