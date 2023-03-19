<?php
require_once "login.php";
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>
<?php
$query = "SELECT * FROM `classics`";
$result = mysqli_query($db_server, $query);
if (!$result) die ("Сбой при доступе к БД: " . mysqli_error($db_server));
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<p>".$row["author"]."<p>".
        "<p>".$row["title"]."<p>".
        "<p>".$row["category"]."<p>".
        "<p>".$row["year"]."<p>".
        "<p>".$row["isbn"]."<p>";
    }
}
else{
    echo "<p>В настоящее время таблица пуста</p>";
}
?>
<?php
mysqli_close($db_server);
?>