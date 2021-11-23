<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Бронирование</title>
    <link rel="stylesheet" href="style/style_1.css">
</head>
<body onload="mounth_day()">
<script src="script/mounth.js"></script>
<?php
    if (!isset($_SESSION['user'])) {
        require_once("header/header.php");      
    } else {
        require_once("header/headerlogin.php");
    };
?>
    <form action="vendor/booking.php" method="post" class="form_reservation">
        <div class="float">
        <div class="panel_2">
            <div class="week_div">
                    <table>
                        <caption>
                            <input type="button" value="<" onclick="previous_mounth(); mounth_day()">
                            <nobr id="mounth"></nobr>
                            <nobr>2021</nobr>
                            <input type="button" value=">" onclick="next_mounth(); mounth_day()">
                        </caption>
                        <tr>
                            <tr>
                            <td><input type="button" class="week_button" value="Пн"></td>
                            <td><input type="button" class="week_button" value="Вт"></td>
                            <td><input type="button" class="week_button" value="Ср"></td>
                            <td><input type="button" class="week_button" value="Чт"></td>
                            <td><input type="button" class="week_button" value="Пт"></td>
                            <td><input type="button" class="week_button" value="Сб"></td>                        
                            <td><input type="button" class="week_button" value="Вс"></td>
                            </tr>
                        </tr>
                    </table>  
            </div>
            <div class="day_div">
            <table>
                    <tr>
                        <tr>
                            <td><input type="button" class="day_button" name="day"  id="day_1" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_2" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_3" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_4" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_5" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_6" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_7" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="button" class="day_button" name="day"  id="day_8" value=""></td>
                            <td><input type="button" class="day_button" name="day"  id="day_9" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_10" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_11" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_12" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_13" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_14" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="button" class="day_button" name="day" id="day_15" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_16" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_17" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_18" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_19" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_20" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_21" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="button" class="day_button" name="day" id="day_22" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_23" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_24" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_25" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_26" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_27" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_28" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="button" class="day_button" name="day" id="day_29" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_30" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_31" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_32" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_33" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_34" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_35" value=""></td>
                        </tr>
                        <tr>
                            <td><input type="button" class="day_button" name="day" id="day_36" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_37" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_38" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_39" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_40" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_41" value=""></td>
                            <td><input type="button" class="day_button" name="day" id="day_42" value=""></td>
                        </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="float">
            <div class="time_div">
                <caption>Время начала</caption><br>
                <input type="text" class="time_rezerv" name="time_hour"> -
                <input type="text" class="time_rezerv" name="time_minute">
            </div>
            <div class="place_div">
                <table>
                    <caption>Места</caption>
                    <tr>
                        <tr>
                            <td><input type="button" name="place" class="place_button" value="1"></td>
                            <td><input type="button" name="place" class="place_button" value="7"></td>
                        </tr>
                        <tr>
                            <td><input type="button" name="place" class="place_button" value="2"></td>
                            <td><input type="button" name="place" class="place_button" value="8"></td>
                        </tr>
                        <tr>
                            <td><input type="button" name="place" class="place_button" value="3"></td>
                            <td><input type="button" name="place" class="place_button" value="9"></td>
                        </tr>
                        <tr>
                            <td><input type="button" name="place" class="place_button" value="4"></td>
                            <td><input type="button" name="place" class="place_button" value="10"></td>
                        </tr>
                        <tr>
                            <td><input type="button" name="place" class="place_button" value="5"></td>
                            <td><input type="button" name="place" class="place_button" value="11"></td>
                        </tr>
                        <tr>
                            <td><input type="button" name="place" class="place_button" value="6"></td>
                        </tr>
                    </tr>
                </table>
                
            </div>
            Дата-<input type="date" class="booking_data"><br>
            Время-<input type="text" class="booking_data"><input type="text" class="booking_data"><br>
            Место-<input type="text" class="booking_data"><span id="result"></span><br>
            <input type="submit">
        </div>
        </div>
        <?php
            if (isset($_SESSION['day'])){
                echo '<p> ' . $_SESSION['day'] . ' </p>';
            }
            unset($_SESSION['day']);
            if (isset($_SESSION['time_hour'])){
                echo '<p> ' . $_SESSION['time_hour'] . ' </p>';
            }
            unset($_SESSION['time_hour']);
            if (isset($_SESSION['time_minute'])){
                echo '<p> ' . $_SESSION['time_minute'] . ' </p>';
            }
            unset($_SESSION['time_minute']);
            if (isset($_SESSION['place'])){
                echo '<p> ' . $_SESSION['place'] . ' </p>';
            }
            unset($_SESSION['place']); 
        ?>
    </form>
</body>
</html>
