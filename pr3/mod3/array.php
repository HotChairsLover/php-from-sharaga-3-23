<?php
/*
ЗАДАНИЕ 1
- Создайте массив $bmw с ячейками:
	"model"
	"speed"
	"doors"
	"year"
- Заполните ячейки значениями: "X5", 120, 5, "2006"	
- Создайте массивы $toyota и $opel аналогичные массиву $bmw.
- Заполните массив $toyota значениями: "Carina", 130, 4, "2007"
- Заполните массив $opel значениями: "Corsa", 140, 5, "2007"	
*/	
?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Массивы</title>
	<meta charset= "utf-8"/>
</head>
<body>
	<h1>Массивы</h1>
	<?php
	$cars = [
		"bmw" => [
			"model" => "X5",
			"speed" => 120,
			"doors" => 5,
			"year" => "2006"
		],
		"toyota" => [
			"model" => "Carina",
			"speed" => 130,
			"doors" => 4,
			"year" => "2007"
		],
		"opel" => [
			"model" => "Corsa",
			"speed" => 140,
			"doors" => 5,
			"year" => "2007"
		],
	];
	foreach($cars as $key => $car){	?>
		<p><?=$key?>: <?=$car["model"]?> - <?=$car["speed"]?> - <?=$car["doors"]?> - <?=$car["year"]?></p>
	<?php
	}
	?>


</body>
</html>
