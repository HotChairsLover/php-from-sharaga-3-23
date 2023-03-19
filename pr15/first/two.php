<?php
$pages = "two ";
if(isset($_COOKIE["pages"]))
{
    $pages = $_COOKIE["pages"];
}
else{
    setcookie("pages",$pages);
}
$arr = explode(" ",$pages);
//if(!in_array("two", $arr))
//{
    array_push($arr, "two");
//}
$pages = implode(" ", $arr);
setcookie("pages", $pages);
?>