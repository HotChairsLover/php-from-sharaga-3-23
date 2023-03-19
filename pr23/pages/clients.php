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
            <p>Добавление записи Clients</p>
            <form action="" enctype="multipart/form-data" method="post">
                <input type="text" name="fio" placeholder="ФИО">
                <input type="text" name="passportRussia" placeholder="Паспорт">
                <input type="text" name="passportNonRussia" placeholder="Загранпаспорт">
                <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}">
                <input type="text" name="visa" placeholder="Виза">
                <input type="date" name="birthdate" placeholder="Дата рождения">
                <input type="file" name="avatar" title="Выберите файл">
                <input type="submit" name="add_client" value="Добавить запись">
            </form>
        </div>
    </div>
    <div class="toflex">
        <div class="halfpage">Записи таблицы Clients</div>
    </div>
    <div class="toflex">
        <div class="halfpage">
        <?php
            $query = "SELECT * FROM `clients`";
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
                    "<img class='avatar' src="."../imgs/$row[avatar]"." alt='avatar'/>".
                    "<form action='' method='post'>".
                    "<input name='user_id' value='$row[user_id]' hidden>".
                    "<input type='submit' name='delete_clients' value='Удалить'>".
                    "</form>".
                    "<p><a href='edit_clients.php?id=$row[user_id]'>Редактировать</a></p>";
                }
            }
            else{
                echo "<p>В настоящее время таблица clients пуста</p>";
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
&& isset($_POST["birthdate"])
&& isset($_FILES["avatar"])){
    $fio = $_POST["fio"];
    $passportRussia = $_POST["passportRussia"];
    $passportNonRussia = $_POST["passportNonRussia"];
    $phone = $_POST["phone"];
    $visa = $_POST["visa"];
    $birthdate = $_POST["birthdate"];
    $file = "../imgs/".$_FILES['avatar']['name'];
    move_uploaded_file($_FILES['avatar']['tmp_name'], $file);   
    $avatar = $_FILES['avatar']['name'];
    $query = "INSERT INTO `$db_database`.`clients` (`fio`,`passportRussia`,`passportNonRussia`,`phone`,`visa`,`birthdate`, `avatar`) 
    VALUE ('$fio', '$passportRussia', '$passportNonRussia', '$phone', '$visa', '$birthdate', '$avatar');";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
if(isset($_POST["delete_clients"])){
    $user_id = $_POST["user_id"];
    $query = "DELETE FROM `$db_database`.`clients` WHERE `user_id` = '$user_id'";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
    echo "<meta http-equiv='refresh' content='0'>";
}
?>
<?php
mysqli_close($db_server);
?>