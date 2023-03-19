<?php
	/*
	ЗАДАНИЕ 1
	- Откройте файл mod4\menu.php
	- Скопируйте код функции getMenu()
	- Вставьте скопированный код в данный файл
	*/

	function getMenu($menu){
		foreach ($menu as $key => $value) {
			echo "<li><a href=\"$value\">$key</a></li>";
		}
	}
	function getTable($rows, $cols){
		$table='<table border="1">';
		for($tr=1;$tr<=$rows;$tr++){
			$table .='<tr>';
			for($td=1;$td<=$cols;$td++){
				if($td==1 || $tr==1){
					$table .= '<th style="color:white; background-color:yellow;">'.$tr*$td. '</th>';
				}
				else {
					$table .='<td>'.$tr*$td. '</td>';
				}
			}
			$table.='<tr>';
		}
		$table.='</table>';
		echo $table;
	}



	/*
	ЗАДАНИЕ 2
	- Откройте файл mod4\table.php
	- Скопируйте код функции getTable()
	- Вставьте скопированный код в данный файл
	*/
?>