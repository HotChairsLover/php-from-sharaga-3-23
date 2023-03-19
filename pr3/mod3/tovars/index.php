<?php
	/*
	ЗАДАНИЕ 1
	- Создайте две числовые переменные $li_one и $tov
	- Присвойте созданным переменным произвольные значения от 1 до 10
	*/
	$li_one = 3;
	$tov = 5;
	?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Циклы</title>
	<meta charset= "utf-8"/>
	<link rel="stylesheet" href="style.css">
	<style>
		/*CSS-код*/
	</style>
</head>
<body>
	<h1>Генерация кода</h1>
	<ul class="one">
	<?php
	for($i = 1; $i <= $li_one; $i++){?>
		<li>Элемент <?=$i?></li>
	<?php
	}
	?>
	</ul>
	<div class="tovars">
	<?php
	for($i = 1; $i <= $tov; $i++){?>
		<div>
			<p>Товар <?=$i?></p>
			<img src="img/tovar_<?=$i?>.png" alt="Товар <?=$i?>">
		</div>
	<?php
	}
	?>
	</div>
</body>
</html>
