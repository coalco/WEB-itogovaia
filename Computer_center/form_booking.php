<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Бронирование</title>
    <link rel="stylesheet" href="style/style_1.css">
    <!--<script src="script/booking.js"></script>-->
</head>
<body>
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
                            <td><button type="radio" class="day_button" value="1" name="day">1</button></td>
                            <td><button type="radio" class="day_button" value="2" name="day">2</button></td>
                            <td><button type="radio" class="day_button" value="3" name="day">3</button></td>
                            <td><button type="radio" class="day_button" value="4" name="day">4</button></td>
                            <td><button type="radio" class="day_button" value="5" name="day">5</button></td>
                            <td><button type="radio" class="day_button" value="6" name="day">6</button></td>
                            <td><button type="radio" class="day_button" value="7" name="day">7</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" class="day_button" value="8" name="day">8</button></td>
                            <td><button type="radio" class="day_button" value="9" name="day">9</button></td>
                            <td><button type="radio" class="day_button" value="10" name="day">10</button></td>
                            <td><button type="radio" class="day_button" value="11" name="day">11</button></td>
                            <td><button type="radio" class="day_button" value="12" name="day">12</button></td>
                            <td><button type="radio" class="day_button" value="13" name="day">13</button></td>
                            <td><button type="radio" class="day_button" value="14" name="day">14</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" class="day_button" value="15" name="day">15</button></td>
                            <td><button type="radio" class="day_button" value="16" name="day">16</button></td>
                            <td><button type="radio" class="day_button" value="17" name="day">17</button></td>
                            <td><button type="radio" class="day_button" value="18" name="day">18</button></td>
                            <td><button type="radio" class="day_button" value="19" name="day">19</button></td>
                            <td><button type="radio" class="day_button" value="20" name="day">20</button></td>
                            <td><button type="radio" class="day_button" value="21" name="day">21</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" class="day_button" value="22" name="day">22</button></td>
                            <td><button type="radio" class="day_button" value="23" name="day">23</button></td>
                            <td><button type="radio" class="day_button" value="24" name="day">24</button></td>
                            <td><button type="radio" class="day_button" value="25" name="day">25</button></td>
                            <td><button type="radio" class="day_button" value="26" name="day">26</button></td>
                            <td><button type="radio" class="day_button" value="27" name="day">27</button></td>
                            <td><button type="radio" class="day_button" value="28" name="day">28</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" class="day_button" value="29" name="day">29</button></td>
                            <td><button type="radio" class="day_button" value="30" name="day">30</button></td>
                        </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="float">
            <div class="time_div">
                <input type="text" class="time_rezerv" name="time_hour"> -
                <input type="text" class="time_rezerv" name="time_minute">
            </div>
            <div class="place_div">
                <table>
                    <tr>
                        <tr>
                            <td><button type="radio" name="place" class="place_button" value="1">1</button></td>
                            <td><button type="radio" name="place" class="place_button" value="2">2</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" name="place" class="place_button" value="3">3</button></td>
                            <td><button type="radio" name="place" class="place_button" value="4">4</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" name="place" class="place_button" value="5">5</button></td>
                            <td><button type="radio" name="place" class="place_button" value="6">6</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" name="place" class="place_button" value="7">7</button></td>
                            <td><button type="radio" name="place" class="place_button" value="8">8</button></td>
                        </tr>
                        <tr>
                            <td><button type="radio" name="place" class="place_button" value="9">9</button></td>
                            <td><button type="radio" name="place" class="place_button" value="10">10</button></td>
                        </tr>
                    </tr>
                </table>
                
            </div>
        </div>
        </div>
        <input type="submit">
        <?php echo '<p> ' . $_SESSION['day'] . ' </p>'; ?>
        <?php echo '<p> ' . $_SESSION['time_hour'] . ' </p>'; ?>
        <?php echo '<p> ' . $_SESSION['time_minute'] . ' </p>'; ?>
        <?php echo '<p> ' . $_SESSION['place'] . ' </p>'; ?>
    </form>
</body>
</html>
