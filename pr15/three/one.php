<?php
if(isset($_POST["exit"])){
    setcookie("key", "", 1);
}
if(isset($_COOKIE["key"])){
    echo("
    <form action='' method='post'>
        <input type='submit' name='exit' value='Выход'>
    </form>"
    );
}
if(isset($_POST["submit"])){
    if($_POST["name"] == "1" && $_POST["password"] == "1" && $_POST["email"] == "1"){
        setcookie("key","123");
    }
}
?>
<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="password">
    <input type="text" name="email">
    <input type="submit" name="submit">
</form>