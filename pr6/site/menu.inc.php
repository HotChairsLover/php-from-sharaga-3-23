<?php
/*
ЗАДАНИЕ 1
- Создайте ассоциативный массив $menu
- Заполните массив следующими данными:
	"Номе"=>"index.php", "Page1"=>"page1.php", "Page2"=>"page2.php", "Page3"=>"page3.php", "Table"=>"table.php"
*/
	$menu=[
		"Номе"=>"index.php?id=home", 
		"Page1"=>"index.php?id=page1", 
		"Page2"=>"index.php?id=page2", 
		"Page3"=>"index.php?id=page3", 
		"Table"=>"index.php?id=table"
	]
?>	

<p>Меню</p>
<?php
/*
ЗАДАНИЕ 2
- Отрисуйте меню вызвая функцию getMenu()
*/
	getMenu($menu);
?>