<?php
$arr = [
    "item1" => [
        "name1", "price1", "count1", "type1"
    ],
    "item2" => [
        "name2", "price2", "count2", "type2"
    ],
    "item3" => [
        "name3", "price3", "count3", "type3"
    ],
    "item4" => [
        "name4", "price4", "count4", "type4"
    ]
];
foreach($arr as $key => $item){
    $name = $item[0];
    $price = $item[1];
    $count = $item[2];
    $type = $item[3];
    #foreach($elem as $item){
        include("goods.php");
    #}
}
?>