<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Бронирование</title>
    <link rel="stylesheet" href="style/style_1.css">
    <script src="script/booking.js"></script>
</head>
<body>
<?php
    if (!isset($_SESSION['user'])) {
        require_once("header/header.php");      
    } else {
        require_once("header/headerlogin.php");
    };
?>
    <form action="" method="post" class="form_reservation">
        <div class="float">
        <div class="panel_2">
            <div class="week_div">
                    <table>
                        <tr>
                            <tr>
                            <td><button class="week_button">Пн</button></td>
                            <td><button class="week_button">Вт</button></td>
                            <td><button class="week_button">Ср</button></td>
                            <td><button class="week_button">Чт</button></td>
                            <td><button class="week_button">Пт</button></td>
                            <td><button class="week_button">Сб</button></td>                        
                            <td><button class="week_button">Вс</button></td>
                            </tr>
                        </tr>
                    </table>  
            </div>
            <div class="day_div">
                <table>
                    <tr>
                        <tr>
                            <td><button class="day_button">1</button></td>
                            <td><button class="day_button">2</button></td>
                            <td><button class="day_button">3</button></td>
                            <td><button class="day_button">4</button></td>
                            <td><button class="day_button">5</button></td>
                            <td><button class="day_button">6</button></td>
                            <td><button class="day_button">7</button></td>
                        </tr>
                        <tr>
                            <td><button class="day_button">8</button></td>
                            <td><button class="day_button">9</button></td>
                            <td><button class="day_button">10</button></td>
                            <td><button class="day_button">11</button></td>
                            <td><button class="day_button">12</button></td>
                            <td><button class="day_button">13</button></td>
                            <td><button class="day_button">14</button></td>
                        </tr>
                        <tr>
                            <td><button class="day_button">15</button></td>
                            <td><button class="day_button">16</button></td>
                            <td><button class="day_button">17</button></td>
                            <td><button class="day_button">18</button></td>
                            <td><button class="day_button">19</button></td>
                            <td><button class="day_button">20</button></td>
                            <td><button class="day_button">21</button></td>
                        </tr>
                        <tr>
                            <td><button class="day_button">22</button></td>
                            <td><button class="day_button">23</button></td>
                            <td><button class="day_button">24</button></td>
                            <td><button class="day_button">25</button></td>
                            <td><button class="day_button">26</button></td>
                            <td><button class="day_button">27</button></td>
                            <td><button class="day_button">28</button></td>
                        </tr>
                        <tr>
                            <td><button class="day_button">29</button></td>
                            <td><button class="day_button">30</button></td>
                        </tr>
                    </tr>
                </table>
            </div>
        </div>
        <div class="float">
            <div class="time_div">
                <input type="text" class="time_rezerv"> -
                <input type="text" class="time_rezerv">
            </div>
            <div class="place_div">
                <table>
                    <tr>
                        <tr>
                            <td><button id="place_id_1" class="place_button" value="1">1</button></td>
                            <td><button id="place_id_2" class="place_button" value="2">2</button></td>
                        </tr>
                        <tr>
                            <td><button id="place_id_3" class="place_button" value="3">3</button></td>
                            <td><button id="place_id_4" class="place_button" value="4">4</button></td>
                        </tr>
                        <tr>
                            <td><button id="place_id_5" class="place_button" value="5">5</button></td>
                            <td><button id="place_id_6" class="place_button" value="6">6</button></td>
                        </tr>
                        <tr>
                            <td><button id="place_id_7" class="place_button" value="7">7</button></td>
                            <td><button id="place_id_8" class="place_button" value="8">8</button></td>
                        </tr>
                        <tr>
                            <td><button id="place_id_9" class="place_button" value="9">9</button></td>
                            <td><button id="place_id_10" class="place_button" value="10">10</button></td>
                        </tr>
                    </tr>
                </table>
                <input type="text" >
            </div>
        </div>
        </div>
        <script>
place_id_1.onclick = function() {
alert(document.getElementById('place_id_1').value)
};
</script>

    </form>
</body>
</html>
