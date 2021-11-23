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
<div class="panel_5">
<form method='POST' action='https://demo.open-processing.ru/create/' id="payform">
  <table>
    <tr>
      <tr>
        <td class="table_payment">
          Введите сумму оплаты:
        </td> 
        <td class="table_payment">
        <input type='text' name='sum' value='100'/>
        </td>
      </tr>
      <tr>
        <td class="table_payment">
          Введите номер заказа: 
        </td>
        <td class="table_payment">
        <input type='text' name='orderid' value='123456'/>
        </td>
      </tr>
      <tr>
        <td class="table_payment">
          Введите название услуги:
        </td> 
        <td class="table_payment">
          <input type='text' name='service_name' value='Тестовая оплата'/>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center" class="table_payment">
          Вы уверены что хотите оплатить:
          <input type="checkbox" name="save" value="Да" onclick="askForSave()">Да
          <input type='submit' value='Перейти к оплате' />
        </td>
      </tr>
    </tr>
  </table>
  <script>
form=document.getElementById("payform");
function askForSave() {
    form.action="vendor/payment.php";
    form.submit();
}
</script>
</form>   
</body>
</html>

