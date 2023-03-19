<?php
require_once "login.php";
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>
<?php
$query = "SELECT * FROM `clients`";
$result = mysqli_query($db_server, $query);
if (!$result) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<p>".$row["user_id"]."<p>".
        "<p>".$row["fio"]."<p>".
        "<p>".$row["passportRussia"]."<p>".
        "<p>".$row["passportNonRussia"]."<p>".
        "<p>".$row["phone"]."<p>".
        "<p>".$row["visa"]."<p>".
        "<p>".$row["birthdate"]."<p>".
        "<p>clients</p><hr>";
    }
}
else{
    echo "<p>В настоящее время таблица clients пуста</p>";
}
?>
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
        "<hr>";
    }
}
else{
    echo "<p>В настоящее время таблица tickets пуста</p>";
}
?>
<?php
mysqli_close($db_server);
?>