<?php
if(isset($_POST["submit"])){
    setcookie("fioo", $_POST["fio"]);
    echo($_COOKIE["fioo"]);
}
if(isset($_COOKIE["fioo"])){
    echo($_COOKIE["fioo"]);
}
?>
<form action="" method="post">
    <input type="text" name="fio">
    <input type="submit" name="submit">
</form>