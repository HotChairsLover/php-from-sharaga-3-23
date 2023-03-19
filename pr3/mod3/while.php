<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Цикл while</title>
	<meta charset= "utf-8"/>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Цикл while</h1>
	<div>
	<?php
	/*
	ЗАДАНИЕ 1
	- Используя цикл while выведите в столбик чётные числа от 1 до 50
	*/
	$i = 1;
	while($i <= 50){
		if($i % 2 === 0){?>
			<p><?=$i?></p>
		<?php
		}
		?>
	<?php
		$i++;
	}
	?>
	</div>
</body>
</html>
