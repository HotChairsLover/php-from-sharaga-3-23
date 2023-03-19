<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    if(file_exists("123.txt")){
        echo("Файл найден");
    }
    else{
        echo("Файл не найден");
    }
    ?>
    <hr>
    <?php
    $handler = fopen("123.txt", "r");
    $line_number = 1;
    if($handler) {
        while (($line = fgets($handler)) !== false){
            if($line_number == 1 || $line_number == 3){
                echo($line."<br>");
                $line_number++;
                continue;
            }
            $line_number++;
        }
        fclose($handler);
    }
    ?>
    <hr>
    <form action="" method="post">
        <input placeholder="Фамилия" name="surname" type="text"/>
        <input placeholder="Имя" name="name" type="text"/>
        <input placeholder="Отчество" name="lastname" type="text"/>
        <input placeholder="Возраст" name="age" type="text"/>
        <input placeholder="Логин" name="login" type="text"/>
        <input placeholder="Пароль" name="password" type="text"/>
        <input class="button" name="submit" type="submit"/>
    </form>
    <?php
    if(isset($_POST["submit"])){
        $unique = true;
        $handler2 = fopen("555.txt", "a+");
        while (($line = fgets($handler2)) !== false){
            if(str_contains($line, 'Логин')){
                $login = explode(":", $line);
                if(trim($login[1]) == trim($_POST["login"])){
                    $unique = false;
                    break;
                }
            }
        }
        if($unique){
        $text = $_POST["surname"];
        fwrite($handler2, $_POST["surname"]."\n");
        fwrite($handler2, $_POST["name"]."\n");
        fwrite($handler2, $_POST["lastname"]."\n");
        fwrite($handler2, $_POST["age"]."\n");
        fwrite($handler2, "Логин:".$_POST["login"]."\n");
        fwrite($handler2, $_POST["password"]."\n");
        }
        else{
            echo("Логин не уникальный");
        }
        fclose($handler2);
    }
    ?>
</body>
</html>