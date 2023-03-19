<form action="" method="post">
    <input type="text" name="name">
    <input type="submit" name="hi" value="Поздроваться">
    <input type="submit" name="unlock" value="Разблокировать файл">
    <input type="submit" name="lock" value="Заблокировать файл">
</form>

<?php
if(!file_exists("hello.txt")){
    $myfile = fopen("hello.txt", "w");
    fclose($myfile);
}
if(isset($_POST["hi"]) and $_POST["name"] != ""){
    if(is_writable("hello.txt")){
        $myfile = fopen("hello.txt", "w");
        fwrite($myfile, "Добрый день, ".$_POST["name"]);
        fclose($myfile);
    }
    else{
        echo "Нет доступа к файлу";
    }
}
else if(isset($_POST["lock"])){
    chmod("hello.txt", 0444);
}
else if(isset($_POST["unlock"])){
    chmod("hello.txt", 0644);
}
?>
