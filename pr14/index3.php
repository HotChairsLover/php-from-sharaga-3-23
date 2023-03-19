<?php

function img2($sizeBg, $sizeItem){
    header("Content-Type: image/png");

    $im = imagecreate(200,100);
    $bg_color = imagecolorallocate($im,0,0,0);

    $im2 = imagecreate($sizeItem,$sizeItem);
    $bg_color2 = imagecolorallocate($im2,255,0,0);

    imagealphablending($im, false);
    imagesavealpha($im, true);

    $randX = random_int(0, $sizeBg);
    $randY = random_int(0, $sizeBg);
    imagecopymerge($im,$im2,$randX,$randY,$randX,$randY,$sizeItem,$sizeItem, 100);
    imagepng($im);
    imagedestroy($im);
    imagedestroy($im2);
}
img2(100,50);

?>