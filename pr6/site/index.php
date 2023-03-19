<?php
	/*
	ЗАДАНИЕ 1
	- Подключите файл lib.inc.php
	*/
include ('lib.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Шаблон сайта</title>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="style.css">
	
</head>
<body>

<table>

<tr>
	<th colspan="2" class="header">
		<!-- Верхняя часть страницы -->
		<?php
		/*
		ЗАДАНИЕ 2
		- Подключите файл, содержащий код верхней части страницы (top.inc.php)
		*/
		include ('top.inc.php');
		?>
	</th>
</tr>

<tr>
	<td class="menu">
		<!-- Меню -->
		<?php
		/*
		ЗАДАНИЕ 3
		- Подключите файл, содержащий код меню (menu.inc.php)
		*/
		include ('menu.inc.php');
		?>
	</td>
	<td class="main">
		<!-- Область основного контента -->
		<?php
		if(isset($_GET["id"])){
			$id = strip_tags($_GET["id"]);
		}
		else{
			$id = "home";
		}
		switch ($id) {
			case 'page1':
				include "page1.php";
				break;
			case 'page2':
				include "page2.php";
				break;
			case 'page3':
				include "page3.php";
				break;
			case 'table':
				include "table.php";
				break;
			case 'home':
				echo "<h1 align='center'>Добро пожаловать</h1>";
				break;
			default:
				echo "<h1 align='center'>Добро пожаловать</h1>";
				break;
		}

		/*
		ЗАДАНИЕ 1
		- Создайте переменную $id
		- Присвойте переменной $id значение параметра id переданного при запросе методом GET
		- С помощью конструкции switch, в зависимости от значения переменной $id, выведите содержимое области основного контента страницы
		*/
		?>
	</td>
</tr>

<tr>
	<td colspan="2" class="footer">
		<!-- Нижняя часть страницы -->
		<?php
		/*
		ЗАДАНИЕ 4
		- Подключите файл, содержащий код нижней части страницы (bottom.inc.php)
		*/
		include 'bottom.inc.php';
		?>
	</td>
</tr>
</table>

</body>
</html>