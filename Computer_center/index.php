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
        if ($_SESSION['user']['admin']==1){
            require_once("header/headerlogin_admin.php");
        } else {
            require_once("header/headerlogin.php");
        }
    };
?>
<div class="panel_1_1">
    <img src="images/img1.jpg" class="img_1">
    <h1 class="text" align="center">Приветствуем в Play</h1>
    <h3>Play - это компьютерный центр оборудованный всем необходимым для качественной и атмосферной онлайн-игры. К нам в киберклуб приходят ценители активного киберспортивного и виртуального отдыха, а также для того, чтоб найти единомышленников. Благодаря производительным компьютером вы можете поиграть в любую новинку или состязаться с мощным онлайн-противником без подвисания компьютера и «лагов».</h3>
    
</div>
<div class="panel_1_2">
    <h1 class="text" align="center">Прайс лист</h1>
    <h3>Один час игры - 500 тенге</h3>
    <h3>Три часа игры - 1000 тенге</h3>
    <h3>Шесть часов игры - 1500 тенге</h3>
</div>
<div class="panel_1_3">
    <h1 class="text" align="center">Технические характеристики компьютеров</h1>
    <table>
        <tr>
            <th class="database_tables" width="260px" >Видеокарта</th>
            <th class="database_tables" width="260px">Процессор</th>
            <th class="database_tables" width="260px">ОЗУ</th>
            <th class="database_tables" width="260px">Монитор</th>
            <th class="database_tables" width="260px">Переферия</th>
        </tr>
        <tr>
            <th class="database_tables" width="260px">NVIDIA GeForce RTX 3060</th>
            <th class="database_tables" width="260px">AMD Ryzen 5 5600X</th>
            <th class="database_tables" width="260px">Kingston HyperX Fury HX430C16FB3K2 2/32gb</th>
            <th class="database_tables" width="260px">BenQ XL2430T</th>
            <th class="database_tables" width="260px">A4tech A90 bloody<br>
            Logitech K845<br>
            JBL TUNE
            </th>
        </tr>
    </table>
</div>
<div class="panel_1_2">
<h1 class="text" align="center">Связь</h1>
<h3>Номер телефона: +7777-777-7777</h3>
<h3>Адрес: Павлодар, улица Ломова 45, корпус 2, кабинет 413</h3>
</div>
</body>
</html>

