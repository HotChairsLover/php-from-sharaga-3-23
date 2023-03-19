<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Карточка посетителя отеля</title>
</head>
<body>
    <form action="" method="post">
        <p>Фамилия</p>
        <input type="text" name="surname" placeholder="Фамилия"/> <br>
        <p>Имя</p>
        <input type="text" name="name" placeholder="Имя"/>  <br>
        <p>Отчество</p>
        <input type="text" name="lastname" placeholder="Отчество"/> <br> 
        <p>Телефон</p>
        <input type="tel" name="phone" placeholder="Телефон"/>  <br>
        <p>Дата бронирования</p>
        <input type="date" name="date" placeholder="Дата бронирования"/>  <br>
        <p>Тип номера</p>
        <input type="text" name="type" placeholder="Тип номера"/>  <br>
        <p>Номер</p>
        <input type="text" name="number" placeholder="Номер"/>  <br>
        <p>Тип питания</p>
        <input type="text" name="typeEat" placeholder="Тип питания"/>  <br>
        <p>Минибар</p>
        <input type="checkbox" name="minibar" placeholder="Минибар"/> <br> 
        <p>Кондиционер</p>
        <input type="checkbox" name="conditioner" placeholder="Кондиционер"/> <br>
        <input type="submit" name="firstForm" value="Отправить"/>
    </form>
    <hr>
    <?php
        foreach($_REQUEST as $key => $itm){
            echo($key.': '.$itm.'<br>');
        }
  
    ?>
    <hr>
    <?php
 
        foreach($_REQUEST as $key => $itm){
            echo($key.': '.$itm.'; ');
        }
    
    ?>
    <hr>
    <?php
    
        foreach($_REQUEST as $key => $itm){
            echo($key.': '.trim($itm).'; ');
        }
    
    ?>
    <hr>
    <form action="" method="post">
        <p>Логин</p>
        <input type="text" name="login" placeholder="Логин"/> <br>
        <p>Пароль</p>
        <input type="password" name="password" placeholder="Пароль"/>  <br>
        <p>Подтверждение пароля</p>
        <input type="password" name="passwordAgain" placeholder="Подтвердите пароль"/> <br> 
        <input type="submit" name="secondForm" value="Отправить"/>
    </form>
    <?php
    if(isset($_POST["secondForm"]))
    {
        if($_POST["password"] === $_POST["passwordAgain"]){
            echo("Вы успешно зарегистрировались под именем: ".$_POST["login"]." с паролем: ".$_POST["passwordAgain"]);
        }
        else{
            echo("Пароли не совпадают");
        }
    }
    ?>
</body>
</html>