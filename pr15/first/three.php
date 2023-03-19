<?php
$pages = "three ";
if(isset($_COOKIE["pages"]))
{
    $pages = $_COOKIE["pages"];
}
else{
    setcookie("pages",$pages);
}
$arr = explode(" ",$pages);
//if(!in_array("three", $arr))
//{
    array_push($arr, "three");
//}
$pages = implode(" ", $arr);
setcookie("pages", $pages);
?>