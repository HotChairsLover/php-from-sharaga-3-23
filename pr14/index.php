<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PR14</title>
</head>
<body>
    Image1: <br>
    <img src="index2.php">
    <br> Image2: <br>
    <img src="index3.php">
    <br> Image3: <br>
    <form action="" method="post">
        <input type="text" name="text" placeholder="Надпись">
        <input type="text" name="posX" placeholder="X">
        <input type="text" name="posY" placeholder="Y">
        <input type="submit" name="submit" value="Добавить">
    </form>
    <?php
    if(isset($_POST["submit"])){ 
        $im = imagecreatefromjpeg("vesna.jpg");
        $txt_color = imagecolorallocate($im,255,0,0);
        imagettftext($im,32,0,$_POST["posX"],$_POST["posY"],$txt_color,"arial.ttf", $_POST["text"]);
        imagepng($im, "img4.png",9); 
        imagedestroy($im);
        echo("<img src='img4.png'");
    }
    ?>
    <br>Image4:<br>
    <form action="" method="post">
        <input type="text" name="symbols" placeholder="Количество символов">
        <input type="text" name="color" placeholder="Цвет: 255,0,0">
        <select type="text" multiple name="font">
            <option disabled>Выберите шрифт</option>
            <option value="arial">arial</option>
        <select>
        <input type="text" name="size" placeholder="Размер">
        <input type="submit" name="submit2" value="Добавить">
    </form>
    <?php
    if(isset($_POST["submit2"])){
        $im2 = imagecreate(200, 200);
        $color = explode(',',$_POST["color"]);
        $bg_color = imagecolorallocate($im2,255,255,255);
        $txt_color = imagecolorallocate($im2,trim($color[0]),trim($color[1]),trim($color[2]));
        $text = substr(sha1(mt_rand()),17,trim($_POST["symbols"]));
        $font = "arial.ttf";
        if($_POST["font"] == "arial"){
            $font = "arial.ttf";
        }
        //imagettftext($im2,15,0,50,50,$txt_color,"arial.ttf","Привет, user");
        imagettftext($im2,trim($_POST["size"]),0,50,50,$txt_color,$font,$text);
        imagepng($im2, "img5.png",9);
        echo("<img src='img5.png'");
    }
    ?>
</body>
</html>