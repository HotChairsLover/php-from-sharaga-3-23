<?php
require_once "login.php";
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>
<?php
$id = $_GET["id"];
$query = "SELECT * FROM `$db_database`.`clients` WHERE `user_id` = '$id'";
$result = mysqli_query($db_server, $query);
$data = mysqli_fetch_assoc($result);
?>
<form action="" method="post">
    <input type="text" name="fio" placeholder="ФИО" value="<?=$data['fio']?>">
    <input type="text" name="passportRussia" placeholder="Паспорт" value="<?=$data['passportRussia']?>">
    <input type="text" name="passportNonRussia" placeholder="Загранпаспорт" value="<?=$data['passportNonRussia']?>">
    <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}" value="<?=$data['phone']?>">
    <input type="text" name="visa" placeholder="Виза" value="<?=$data['visa']?>">
    <input type="date" name="birthdate" placeholder="Дата рождения" value="<?=$data['birthdate']?>">
    <input type="submit" name="update_client" value="Добавить запись">
</form>
<p><b>Запись в БД</b></p>
<p>ФИО: <?=$data["fio"];?></p>
<p>Паспорт: <?=$data["passportRussia"];?></p>
<p>Загранпаспорт: <?=$data["passportNonRussia"];?></p>
<p>Телефон: <?=$data["phone"];?></p>
<p>Виза: <?=$data["visa"];?></p>
<p>Дата рождения: <?=$data["birthdate"];?></p>
<?php
if(isset($_POST["update_client"]) 
&& isset($_POST["fio"]) 
&& isset($_POST["passportRussia"]) 
&& isset($_POST["passportNonRussia"]) 
&& isset($_POST["phone"]) 
&& isset($_POST["visa"]) 
&& isset($_POST["birthdate"])){
    $fio = $_POST["fio"];
    $passportRussia = $_POST["passportRussia"];
    $passportNonRussia = $_POST["passportNonRussia"];
    $phone = $_POST["phone"];
    $visa = $_POST["visa"];
    $birthdate = $_POST["birthdate"];
    
    $query = "UPDATE `$db_database`.`clients` SET `fio` = '$fio',`passportRussia` = '$passportRussia',`passportNonRussia` = '$passportNonRussia',
    `phone` = '$phone',`visa` = '$visa', `birthdate` = '$birthdate' WHERE `user_id` = '$id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
?>
<?php
mysqli_close($db_server);
?>