<?php
$cols = 10;
	$rows = 10;
	?>
<!DOCTYPE html>

<html lang="ru">
<head>
	<title>Корнатовский</title>
	<meta charset= "utf-8"/>
</head>
<body>
	<h1>Таблица умножения</h1>
	<table>
	<?php
	
	for($rw = 1; $rw <= $rows; $rw++){
		echo "<tr>";
		for($cl = 1; $cl <= $cols; $cl++){
			if($cl == 1 or $rw == 1){
				echo "<th style = 'background-color:yellow'>", $cl * $rw, "</th>";
			}
			else{
				echo "<td>", $cl * $rw, "</td>";
			}
		}
		echo "</tr>";
	}
	?>
	</table>
	
</body>
</html>
