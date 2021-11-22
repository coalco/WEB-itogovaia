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
<form method='POST' action='https://demo.open-processing.ru/create/' >
  Введите сумму оплаты: 
    <input type='text' name='sum' value='100'/> <br />
  Введите номер заказа: 
    <input type='text' name='orderid' value='123456'/> <br />
  Введите название услуги: 
    <input type='text' name='service_name' value='Тестовая оплата'/> <br />
  <input type='submit' value='Перейти к оплате' />
</form>   
</body>
</html>

