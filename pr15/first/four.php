<?php
$pages = "four ";
if(isset($_COOKIE["pages"]))
{
    $pages = $_COOKIE["pages"];
}
else{
    setcookie("pages",$pages);
}
$arr = explode(" ",$pages);
//if(!in_array("four", $arr))
//{
    array_push($arr, "four");
//}
$pages = implode(" ", $arr);
setcookie("pages", $pages);
echo(var_dump($_COOKIE["pages"]));
?>