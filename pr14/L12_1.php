<?php

/*header("Content-Type: image/png");

$im = imagecreate(200,100);
$bg_color = imagecolorallocate($im,0,0,0);
$txt_color = imagecolorallocate($im,255,255,255);
imagestring($im,5,50,50,"Text...",$txt_color);

imagepng($im,'1a.png',9);
imagepng($im,NULL,9);
imagedestroy($im);*/

/*header("Content-Type: image/jpg");

$im = imagecreate(200,100);
$bg_color = imagecolorallocate($im,0,0,0);
$txt_color = imagecolorallocate($im,255,255,255);
imagestring($im,5,50,50,"Text...",$txt_color);

imagejpeg($im,'1a.jpg',75);
imagejpeg($im,NULL,75);
imagedestroy($im);*/

header("Content-Type: image/png");

$im = imagecreatefromjpeg("vesna.jpg");
$txt_color = imagecolorallocate($im,255,0,0);
$shadow = imagecolorallocate($im,0,255,0);
$font = "arial.ttf";

imagettftext($im,32,-30,54,54,$txt_color,$font, "Text...");
imagettftext($im,32,-30,50,50,$txt_color,$font, "Text...");

imagepng($im,'2a.png',9);
imagepng($im,NULL,9);
imagedestroy($im);
?>