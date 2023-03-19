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
?>
<div>
    <div>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="pages/clients.php">Клиенты</a></li>
            <li><a href="pages/tickets.php">Билеты</a></li>
        </ul>
    </div>
    <div>Путешествия<div>
    <div class="toflex">
        <div class="halfpage">5 Записей таблицы Clients</div>
        <div class="halfpage">5 Записей таблицы Tickets</div>
    </div>
    <div class="toflex">
        <div class="halfpage">
        <?php
            $query = "SELECT * FROM `clients` LIMIT 5";
            $result = mysqli_query($db_server, $query);
            if (!$result) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<p>ID клиента: ".$row["user_id"]."<p>".
                    "<p>ФИО: ".$row["fio"]."<p>".
                    "<p>Паспорт: ".$row["passportRussia"]."<p>".
                    "<p>Загранпаспорт: ".$row["passportNonRussia"]."<p>".
                    "<p>Телефон: ".$row["phone"]."<p>".
                    "<p>Виза: ".$row["visa"]."<p>".
                    "<p>Дата рождения: ".$row["birthdate"]."<p>".
                    "<img class='avatar' src="."imgs/$row[avatar]"." alt='avatar'/>".
                    "<form action='' method='post'>".
                    "<input name='user_id' value='$row[user_id]' hidden>".
                    "<input type='submit' name='delete_clients' value='Удалить'>".
                    "</form>".
                    "<p><a href='pages/edit_clients.php?id=$row[user_id]'>Редактировать</a></p>";
                }
            }
            else{
                echo "<p>В настоящее время таблица clients пуста</p>";
            }
        ?>
        </div>
        <div class="halfpage">
        <?php
            $query = "SELECT * FROM `tickets` LIMIT 5";
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
                    "<p><a href='pages/edit_tickets.php?id=$row[ticket_id]'>Редактировать</a></p>";
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
if(isset($_POST["delete_clients"])){
    $user_id = $_POST["user_id"];
    $query = "DELETE FROM `$db_database`.`clients` WHERE `user_id` = '$user_id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
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
