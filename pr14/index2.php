<?php

function img1(){
header("Content-Type: image/png");

$im = imagecreate(200,100);
$bg_color = imagecolorallocate($im,0,0,0);
$txt_color = imagecolorallocate($im,255,255,255);
imagettftext($im,15,0,50,50,$txt_color,"arial.ttf","Привет, user");

imagepng($im);
imagedestroy($im);
}
img1();

?>