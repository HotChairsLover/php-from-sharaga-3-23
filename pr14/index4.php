<?php
    $im = imagecreatefromjpeg("vesna.jpg");
    $txt_color = imagecolorallocate($im,255,0,0);
    imagettftext($im,32,0,$_POST["posX"],$_POST["posY"],$txt_color,"arial.ttf", $_POST["text"]);
    imagepng($im);   
    imagedestroy($im);
?>