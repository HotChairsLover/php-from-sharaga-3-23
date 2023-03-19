<?php
require_once "login.php";
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>
<?php
$id = $_GET["id"];
$query = "SELECT * FROM `$db_database`.`tickets` WHERE `ticket_id` = '$id'";
$result = mysqli_query($db_server, $query);
$data = mysqli_fetch_assoc($result);
?>
<form action="" method="post">
    <input type="text" name="client" placeholder="id клиента" value="<?=$data['client']?>">
    <input type="text" name="country" placeholder="Страна" value="<?=$data['country']?>">
    <input type="text" name="destination" placeholder="Место назначения" value="<?=$data['destination']?>">
    <input type="text" name="hotel" placeholder="Отель" value="<?=$data['hotel']?>">
    <input type="text" name="transport" placeholder="Транспорт" value="<?=$data['transport']?>">
    <input type="submit" name="update_ticket" value="Обновить запись">
</form>
<p><b>Запись в БД</b></p>
<p>Id клиента: <?=$data["client"];?></p>
<p>Страна: <?=$data["country"];?></p>
<p>Место назначения: <?=$data["destination"];?></p>
<p>Отель: <?=$data["hotel"];?></p>
<p>Транспорт: <?=$data["transport"];?></p>
<?php
if(isset($_POST["update_ticket"]) 
&& isset($_POST["client"]) 
&& isset($_POST["country"]) 
&& isset($_POST["destination"]) 
&& isset($_POST["hotel"]) 
&& isset($_POST["transport"])){
    $client = $_POST["client"];
    $country = $_POST["country"];
    $destination = $_POST["destination"];
    $hotel = $_POST["hotel"];
    $transport = $_POST["transport"];
    
    $query = "UPDATE `$db_database`.`tickets` SET `client` = '$client',`country` = '$country',`destination` = '$destination',
    `hotel` = '$hotel',`transport` = '$transport' WHERE `ticket_id` = '$id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
?>
<?php
mysqli_close($db_server);
?>