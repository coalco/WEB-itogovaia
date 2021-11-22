<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Бронирование</title>
    <link rel="stylesheet" href="style/style_1.css">
    <script src="script/mounth.js"></script>
</head>
<body onload="labelch();mounth_day()">
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
                            <input type="button" value="<" onclick="previous_mounth();labelch(); mounth_day()">
                            <nobr id="mounth"></nobr>
                            <nobr>2021</nobr>
                            <input type="button" value=">" onclick="next_mounth();labelch(); mounth_day()">
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
                            <td>
                            <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_1" value="">
                                    <label for="day_1" id="day_label_1"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_2" value="">
                                    <label for="day_2" id="day_label_2"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_3" value="">
                                    <label for="day_3" id="day_label_3"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_4" value="">
                                    <label for="day_4" id="day_label_4"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_5" value="">
                                    <label for="day_5" id="day_label_5"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_6" value="">
                                    <label for="day_6" id="day_label_6"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_7" value="">
                                    <label for="day_7" id="day_label_7"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_8" value="">
                                    <label for="day_8" id="day_label_8"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day"  id="day_9" value="">
                                    <label for="day_9" id="day_label_9"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_10" value="">
                                    <label for="day_10" id="day_label_10"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_11" value="">
                                    <label for="day_11" id="day_label_11"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_12" value="">
                                    <label for="day_12" id="day_label_12"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_13" value="">
                                    <label for="day_13" id="day_label_13"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_14" value="">
                                    <label for="day_14" id="day_label_14"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_15" value="">
                                    <label for="day_15" id="day_label_15"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_16" value="">
                                    <label for="day_16" id="day_label_16"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_17" value="">
                                    <label for="day_17" id="day_label_17"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_18" value="">
                                    <label for="day_18" id="day_label_18"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_19" value="">
                                    <label for="day_19" id="day_label_19"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_20" value="">
                                    <label for="day_20" id="day_label_20"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_21" value="">
                                    <label for="day_21" id="day_label_21"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_22" value="">
                                    <label for="day_22" id="day_label_22"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_23" value="">
                                    <label for="day_23" id="day_label_23"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_24" value="">
                                    <label for="day_24" id="day_label_24"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_25" value="">
                                    <label for="day_25" id="day_label_25"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_26" value="">
                                    <label for="day_26" id="day_label_26"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_27" value="">
                                    <label for="day_27" id="day_label_27"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_28" value="">
                                    <label for="day_28" id="day_label_28"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_29" value="">
                                    <label for="day_29" id="day_label_29"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_30" value="">
                                    <label for="day_30" id="day_label_30"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_31" value="">
                                    <label for="day_31" id="day_label_31"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_32" value="">
                                    <label for="day_32" id="day_label_32"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_33" value="">
                                    <label for="day_33" id="day_label_33"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_34" value="">
                                    <label for="day_34" id="day_label_34"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_35" value="">
                                    <label for="day_35" id="day_label_35"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_36" value="">
                                    <label for="day_36" id="day_label_36"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_37" value="">
                                    <label for="day_37" id="day_label_37"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_38" value="">
                                    <label for="day_38" id="day_label_38"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_39" value="">
                                    <label for="day_39" id="day_label_39"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_40" value="">
                                    <label for="day_40" id="day_label_40"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="day_41" value="">
                                    <label for="day_41" id="day_label_41"></label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" class="day_button" name="day" id="place_42" value="">
                                    <label for="day_42" id="day_label_42"></label>
                                </div>
                            </td>
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
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_1" value="1">
                                    <label for="place_1">1</label>
                                </div>
                                    
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_7" value="7">
                                    <label for="place_7">7</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_2" value="2">
                                    <label for="place_2">2</label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_8" value="8">
                                    <label for="place_8">8</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_3" value="3">
                                    <label for="place_3">3</label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_9" value="9">
                                    <label for="place_9">9</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_4" value="4">
                                    <label for="place_4">4</label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_10" value="10">
                                    <label for="place_10">10</label>
                                </div>
                            </td>
                            </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_5" value="5">
                                    <label for="place_5">5</label>
                                </div>
                            </td>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_11" value="11">
                                    <label for="place_11">11</label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form_radio_btn">
                                    <input type="radio" name="place" class="place_button" id="place_6" value="6">
                                    <label for="place_6">6</label>
                                </div>
                            </td>
                        </tr>
                    </tr>
                </table>
            </div>
            <input type="submit" class="form_submit" value="Далее">
        </div>
    </div>
    </form>
    <link rel="stylesheet" href="style/radio_button.css">
    <script src="script/mounth.js"></script>
</body>
</html>
