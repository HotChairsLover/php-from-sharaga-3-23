<?php
	/*
	ЗАДАНИЕ 1
	Отрисовать навигационное меню на странице, типа
		<a href="contact.php">Contact</a>
	используя массив в качестве структуры меню
	
	ЗАДАНИЕ 2
	- Создайте ассоциативный массив $menu
	- Заполните массив соблюдая следующие условия:
		- Название ячейки является пунктом меню, например: Home, About, Contact...
		- Значение ячейки является именем файла, на который будет указывать ссылка, например: index.php, about.php, contact.html...
	*/
	?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Меню</title>
	<meta charset= "utf-8"/>
</head>
<body>
	<h1>ћеню</h1>
	<?php
	$menu = [
		"Home" => "index.php",
		"Contact" => "index.php",
		"About" => "index.php",
		"Project" => "index.php",
		"Map" => "index.php"
	];
	foreach($menu as $link => $href){
		echo "<li><a href=\"$href\">", $link, "</a></li>";
	}
	/*
	ЗАДАНИЕ 3
	- Используя цикл foreach отрисуйте вертикальное меню, структура которого описана в массиве $menu
	*/
	?>
</body>
</html>
