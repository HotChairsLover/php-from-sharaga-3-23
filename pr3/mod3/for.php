<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Цикл for</title>
	<meta charset= "utf-8"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Цикл for</h1>
	<div>
	<?php
	/*
	ЗАДАНИЕ 1
	- Используя цикл for выведите в виде маркированного списка нечётные числа от 1 до 50
	*/
	for($i = 1; $i <= 50; $i++){ 
		if($i % 2 !== 0){?>
			<p><?=$i?></p>
		<?php
		}
		?>
	<?php
	}
	?>
	</div>
</body>
</html>
