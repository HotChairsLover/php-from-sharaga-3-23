<?php
	$cols =4;
	$rows=6;
	?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Корнатовский Дмитрий</title>
	<meta charset= "utf-8"/>
</head>
<body>
	<h1>Цикл for</h1>
	<?php
	$table='<table border="1">';
	for($tr=1;$tr<=$rows;$tr++){
		$table .='<tr>';
		for($td=1; $td<=$cols;$td++){
			if($td==1 || $tr==1){
				$table .= '<th style="color:black; background-color:yellow;">'.$tr*$td. '</th>';
			}
			else {
				$table.='<td>'.$tr*$td. '</td>';
			}
		}
		$table.='<tr>';
	}
	$table.='</table>';
	echo $table;
	?>
</body>
</html>
