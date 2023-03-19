<?php
$pages = "one ";
if(isset($_COOKIE["pages"]))
{
    $pages = $_COOKIE["pages"];
}
else{
    setcookie("pages",$pages);
}
$arr = explode(" ",$pages);
//if(!in_array("one", $arr))
//{
    array_push($arr, "one");
//}
$pages = implode(" ", $arr);
setcookie("pages", $pages);
?>