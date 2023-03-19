<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Корнатовский ИСВ-20-3</title>
</head>
<?php
require_once "login.php";
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>
<div>
    <div>Путешествия<div>
    <div class="toflex">
        <div class="halfpage">
            <p>Добавление записи Clients</p>
            <form action="" method="post">
                <input type="text" name="fio" placeholder="ФИО">
                <input type="text" name="passportRussia" placeholder="Паспорт">
                <input type="text" name="passportNonRussia" placeholder="Загранпаспорт">
                <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}">
                <input type="text" name="visa" placeholder="Виза">
                <input type="date" name="birthdate" placeholder="Дата рождения">
                <input type="submit" name="add_client" value="Добавить запись">
            </form>
        </div>
        <div class="halfpage">
            <p>Добавление записи Tickets</p>
            <form action="" method="post">
                <input type="text" name="client" placeholder="id клиента">
                <input type="text" name="country" placeholder="Страна">
                <input type="text" name="destination" placeholder="Место назначения">
                <input type="tel" name="hotel" placeholder="Отель">
                <input type="text" name="transport" placeholder="Транспорт">
                <input type="submit" name="add_ticket" value="Добавить запись">
            </form>
        </div>
    </div>
    <div class="toflex">
        <div class="halfpage">Записи таблицы Clients</div>
        <div class="halfpage">Записи таблицы Tickets</div>
    </div>
    <div class="toflex">
        <div class="halfpage">
        <?php
            $query = "SELECT * FROM `clients`";
            $result = mysqli_query($db_server, $query);
            if (!$result) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<form action='' method='post'>".
                    "<input name='user_id' value='$row[user_id]' hidden>".
                    "<p>ID клиента: ".$row["user_id"]."<p>".
                    "<p>ФИО: ".$row["fio"]."<p>".
                    "<p>Паспорт: ".$row["passportRussia"]."<p>".
                    "<p>Загранпаспорт: ".$row["passportNonRussia"]."<p>".
                    "<p>Телефон: ".$row["phone"]."<p>".
                    "<p>Виза: ".$row["visa"]."<p>".
                    "<p>Дата рождения: ".$row["birthdate"]."<p>".
                    "<input type='submit' name='delete_clients' value='Удалить'>".
                    "</form>";
                }
            }
            else{
                echo "<p>В настоящее время таблица clients пуста</p>";
            }
        ?>
        </div>
        <div class="halfpage">
        <?php
            $query = "SELECT * FROM `tickets`";
            $result = mysqli_query($db_server, $query);
            if (!$result) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<form action='' method='post'>".
                    "<input name='ticket_id' value='$row[ticket_id]' hidden>". 
                    "<p>".$row["ticket_id"]."<p>".
                    "<p>".$row["client"]."<p>".
                    "<p>".$row["country"]."<p>".
                    "<p>".$row["destination"]."<p>".
                    "<p>".$row["hotel"]."<p>".
                    "<p>".$row["transport"]."<p>".
                    "<input type='submit' name='delete_ticket' value='Удалить'>".
                    "</form>";
                }
            }
            else{
                echo "<p>В настоящее время таблица tickets пуста</p>";
            }
        ?>
        </div>
    </div>
</div>

<?php
if(isset($_POST["add_client"]) 
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
    
    $query = "INSERT INTO `$db_database`.`clients` (`fio`,`passportRussia`,`passportNonRussia`,`phone`,`visa`,`birthdate`) 
    VALUE ('$fio', '$passportRussia', '$passportNonRussia', '$phone', '$visa', '$birthdate');";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
?>
<?php
if(isset($_POST["add_ticket"]) 
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
    
    $query = "INSERT INTO `$db_database`.`tickets` (`client`,`country`,`destination`,`hotel`,`transport`) 
    VALUE ('$client', '$country', '$destination', '$hotel', '$transport');";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
?>
<?php
if(isset($_POST["delete_clients"])){
    $user_id = $_POST["user_id"];
    $query = "DELETE FROM `$db_database`.`clients` WHERE `user_id` = '$user_id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
if(isset($_POST["delete_ticket"])){
    $ticket_id = $_POST["ticket_id"];
    $query = "DELETE FROM `$db_database`.`tickets` WHERE `ticket_id` = '$ticket_id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
?>
<?php
mysqli_close($db_server);
?>
