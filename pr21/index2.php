<?php
require_once "login.php";
$db_server = mysqli_connect($db_hostname, $db_username, $db_password, $db_database)
or die (mysqli_connect_error());
mysqli_set_charset($db_server, "utf8");
?>
<form action="" method="post">
    <input type="text" name="author" placeholder="author">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="category" placeholder="category">
    <input type="text" name="year" placeholder="year">
    <input type="text" name="isbn" placeholder="isbn">
    <input type="submit" name="add">
</form>
<?php
if(isset($_POST["add"]) 
&& isset($_POST["isbn"]) 
&& isset($_POST["year"]) 
&& isset($_POST["category"]) 
&& isset($_POST["title"]) 
&& isset($_POST["author"])){
    $isbn = $_POST["isbn"];
    $year = $_POST["year"];
    $category = $_POST["category"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    
    $query = "INSERT INTO `$db_database`.`classics` (`isbn`,`year`,`category`,`title`,`author`) 
    VALUE ('$isbn', '$year', '$category', '$title', '$author');";
    $result = mysqli_query($db_server, $query)
    or die ("Ошибка в запросе: " . mysqli_error($db_server));
}
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
        "<p>".$row["isbn"]."<p>".
        "<hr>";
    }
}
else{
    echo "<p>В настоящее время таблица пуста</p>";
}
?>
<?php
mysqli_close($db_server);
?>