<?php
    session_start();
    require_once('vendor/connect.php');
    $login=$_SESSION['user']['login'];
    $result = mysqli_query($connect,"SELECT * FROM booking WHERE login='$login'");
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
        if ($_SESSION['user']['admin']==1){
            require_once("header/headerlogin_admin.php");
        } else {
            require_once("header/headerlogin.php");
        }
    };
?>
<div class="panel_4">
        <?php
        echo '<p class="text_panel"> Ваш id: ' . $_SESSION['user']['id'] . '</p>  ';
        echo '<p class="text_panel"> Ваше имя и фамилия: ' . $_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname'] . '</p>';
        echo '<p class="text_panel"> Ваш логин: ' . $_SESSION['user']['login'] . '</p>  ';
        ?>

    <table id='database_tables' class="database_tableыs">
        <tr>
            <th colspan='8' class="database_tables">Ваше бронирование</th>
        </tr>
        <tr>
            <th width="100px" class="database_tables">id</th>
            <th width="100px" class="database_tables">Имя</th>
            <th width="100px" class="database_tables">Фамилия</th>
            <th width="100px" class="database_tables">Логин</th>
            <th width="100px" class="database_tables">Место</th>
            <th width="100px" class="database_tables">Дата</th>
            <th width="100px" class="database_tables">Время начала</th>
            <th width="100px" class="database_tables">Время конца</th>
        </tr>
<?php
    while($row = mysqli_fetch_array($result)){
?>
        <tr>
            <td class="database_tables"> 
                <?php echo $row['booking_id']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['name']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['surname']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['login']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['place']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['date']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['time_start']; ?>
            </td>
            <td class="database_tables"> 
                <?php echo $row['time_end']; ?>
            </td>
        </tr>
<?php
    }
?>
    </table>
<?php
    mysqli_close($connect);
?>
</div>
</body>
</html>
