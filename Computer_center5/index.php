<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Главная страница</title>
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
    <img src="images/img1.jpg" class="img_1">
    <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem id consectetur voluptatem porro fugiat dolore totam. Minus nobis temporibus explicabo culpa velit fuga, illum dolores nam nostrum perspiciatis tempore praesentium?</p>
</div>
</body>
</html>

