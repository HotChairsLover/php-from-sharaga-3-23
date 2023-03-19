<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="path" title="Выберите файл">
    <input type="submit" name="add_client" value="Добавить запись">
</form>
<hr>
<form action="" enctype="multipart/form-data" method="post">
                <input type="text" name="fio" placeholder="ФИО">
                <input type="text" name="passportRussia" placeholder="Паспорт">
                <input type="text" name="passportNonRussia" placeholder="Загранпаспорт">
                <input type="tel" name="phone" placeholder="9876543210" pattern="[0-9]{10}">
                <input type="text" name="visa" placeholder="Виза">
                <input type="date" name="birthdate" placeholder="Дата рождения">
                <input type="file" name="path" title="Выберите файл">
                <input type="submit" name="add_client" value="Добавить запись">
</form>
<?php
if(isset($_POST["add_client"]) 
&& isset($_POST["fio"]) 
&& isset($_POST["passportRussia"]) 
&& isset($_POST["passportNonRussia"]) 
&& isset($_POST["phone"]) 
&& isset($_POST["visa"]) 
&& isset($_POST["birthdate"])
&& isset($_FILES["path"])){
    $fio = $_POST["fio"];
    $passportRussia = $_POST["passportRussia"];
    $passportNonRussia = $_POST["passportNonRussia"];
    $phone = $_POST["phone"];
    $visa = $_POST["visa"];
    $birthdate = $_POST["birthdate"];
    $file = "imgs/".$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'], $file);   
    $avatar = $_FILES['path']['name'];
}
?>