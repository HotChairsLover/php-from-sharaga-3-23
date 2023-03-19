<?php
function hi(){
    echo "hi"."<br>";
}
function student($surname, $name, $group){
    echo $surname." ".$name." ".$group."<br>";
}
function group($list, $name, $yearStart, $yearEnd){
    echo $list." ".$name." ".$yearStart." ".$yearEnd."<br>";
}
function table($rows, $cols){
    $table = '<table border="1">';
    for($tr=1;$tr<=$rows;$tr++){
        $table .= '<tr>';
        for($td=1;$td<=$cols;$td++){
            if($tr===1 or $td===1){
                $table .= '<th style="color:white;background-color:green;">'. $tr*$td .'</th>';
            }
            else{
                $table .= '<td>'. $tr*$td .'</td>';
            }
        }
        $table .= '</tr>';
    }
    $table .= '</table>';
    echo $table;
    echo "<br>";
}
function menu($arr){
    foreach($arr as $key => $item){
        echo "<a href=".$item.">".$key."</a>"."<br>";
    }
}
function random(){
    echo random_int(45,234)."<br>";
}
function randomFloat(){
    echo random_int(45*1000000,234*1000000)/1000000;
    echo "<br>";
}
function op($num1, $num2, $operator){
    switch($operator){
        case("+"):
            echo $num1+$num2."<br>";
            break;
        case("/"):
            if($num2 == 0){
                echo "на ноль не делим"."<br>";
            }
            else{
                echo $num1/$num2."<br>";
            }
            break;
        case("*"):
            echo $num1*$num2."<br>";
            break;
        case("-"):
            echo $num1-$num2."<br>";
            break;
    }
}
if(function_exists('hi')){
    hi();
}
if(function_exists('student')){
    student("Фамилия", "Имя", "Группа");
}
if(function_exists('group')){
    group("Список", "Название", "ГодНачала", "ГодКонца");
}
if(function_exists('table')){
    table(5,5);
}
if(function_exists('menu')){
    $arr = [
        "ссылка1" => "index.php",
        "ссылка2" => "index.php",
        "ссылка3" => "index.php",
        "ссылка4" => "index.php",
    ];
    menu($arr);
}
if(function_exists('random')){
    random();
}
if(function_exists('randomFloat')){
    randomFloat();
}
if(function_exists('op')){
    op(10, 5, "/");
}

?>
