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
<div>
    <div>
        <ul>
        <li><a href="../index.php">Главная</a></li>
            <li><a href="clients.php">Клиенты</a></li>
            <li><a href="tickets.php">Билеты</a></li>
        </ul>
    </div>
    <div>Путешествия<div>
    <div class="toflex">
        <div class="halfpage">
            <p>Добавление записи Tickets</p>
            <form action="" method="post">
                <input type="text" name="client" placeholder="id клиента">
                <input type="text" name="country" placeholder="Страна">
                <input type="text" name="destination" placeholder="Место назначения">
                <input type="text" name="hotel" placeholder="Отель">
                <input type="text" name="transport" placeholder="Транспорт">
                <input type="submit" name="add_ticket" value="Добавить запись">
            </form>
        </div>
    </div>
    <div class="toflex">
        <div class="halfpage">Записи таблицы Tickets</div>
    </div>
    <div class="toflex">
        <div class="halfpage">
        <?php
            $query = "SELECT * FROM `tickets`";
            $result = mysqli_query($db_server, $query);
            if (!$result) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>".$row["ticket_id"]."<p>".
                    "<p>".$row["client"]."<p>".
                    "<p>".$row["country"]."<p>".
                    "<p>".$row["destination"]."<p>".
                    "<p>".$row["hotel"]."<p>".
                    "<p>".$row["transport"]."<p>".
                    "<form action='' method='post'>".
                    "<input name='ticket_id' value='$row[ticket_id]' hidden>".
                    "<input type='submit' name='delete_ticket' value='Удалить'>".
                    "</form>".
                    "<p><a href='edit_tickets.php?id=$row[ticket_id]'>Редактировать</a></p>";
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
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
if(isset($_POST["delete_ticket"])){
    $ticket_id = $_POST["ticket_id"];
    $query = "DELETE FROM `$db_database`.`tickets` WHERE `ticket_id` = '$ticket_id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>