<?php
$arr = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
    ];
?>
    <p><?=$arr["cms"][0]?></p>
    <p><?=$arr["cms"][1]?></p>
    <p><?=$arr["colors"]["green"]?></p>
    <p><?=$arr["colors"]["red"]?></p>
<?php
$days = [
    "ru" => [1 => "понедельник",2 => "вторник",3 => "среда",4 => "четверг",5 => "пятница",6 => "суббота",7 => "воскресенье"],
    "en" => [1 => "Monday ",2 => "Tuesday ",3 => "Wednesday ",4 => "Thursday ",5 => "Friday ",6 => "Saturday ",7 => "Sunday"]
];
?>
<p><?=$days["ru"][1]?></p>
<p><?=$days["en"][3]?></p>
<?php
$lang = "ru";
$day = 5;
?>
<p><?=$days[$lang][$day]?></p>