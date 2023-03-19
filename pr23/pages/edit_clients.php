<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Корнатовский ИСВ-20-3</title>
</head>
<?php
require_once "../login.php";
?>
<?php
$id = $_GET["id"];
$query = "SELECT * FROM `$db_database`.`clients` WHERE `user_id` = '$id'";
$result = mysqli_query($db_server, $query);
$data = mysqli_fetch_assoc($result);
?>
<div>
    <ul>
        <li><a href="../index.php">Главная</a></li>
        <li><a href="pages/clients.php">Клиенты</a></li>
        <li><a href="pages/tickets.php">Билеты</a></li>
    </ul>
</div>
<form action="" enctype="multipart/form-data"  method="post">
    <input type="text" name="fio" placeholder="ФИО" value="<?=$data['fio']?>">
    <input type="text" name="passportRussia" placeholder="Паспорт" value="<?=$data['passportRussia']?>">
    <input type="text" name="passportNonRussia" placeholder="Загранпаспорт" value="<?=$data['passportNonRussia']?>">
    <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}" value="<?=$data['phone']?>">
    <input type="text" name="visa" placeholder="Виза" value="<?=$data['visa']?>">
    <input type="date" name="birthdate" placeholder="Дата рождения" value="<?=$data['birthdate']?>">
    <input type="file" name="avatar" title="Выберите файл">
    <input type="submit" name="update_client" value="Добавить запись">
</form>
<p><b>Запись в БД</b></p>
<p>ФИО: <?=$data["fio"];?></p>
<p>Паспорт: <?=$data["passportRussia"];?></p>
<p>Загранпаспорт: <?=$data["passportNonRussia"];?></p>
<p>Телефон: <?=$data["phone"];?></p>
<p>Виза: <?=$data["visa"];?></p>
<p>Дата рождения: <?=$data["birthdate"];?></p>
<img class='avatar' src="../imgs/<?=$data["avatar"];?>" alt='avatar'/>
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
    if($_FILES["avatar"]["name"] != null){
        $avatar = $_FILES["avatar"]['name'];
        $file = "../imgs/".$_FILES['avatar']['name'];
        move_uploaded_file($_FILES['avatar']['tmp_name'], $file); 
        $query = "UPDATE `$db_database`.`clients` SET `fio` = '$fio',`passportRussia` = '$passportRussia',`passportNonRussia` = '$passportNonRussia',
        `phone` = '$phone',`visa` = '$visa', `birthdate` = '$birthdate', `avatar` = '$avatar' WHERE `user_id` = '$id'";
    }
    else{
        $query = "UPDATE `$db_database`.`clients` SET `fio` = '$fio',`passportRussia` = '$passportRussia',`passportNonRussia` = '$passportNonRussia',
        `phone` = '$phone',`visa` = '$visa', `birthdate` = '$birthdate' WHERE `user_id` = '$id'";
    }
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>