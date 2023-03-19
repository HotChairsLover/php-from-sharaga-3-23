<?php
/*
ЗАДАНИЕ 1
- Проверьте, была ли корректно отправлена форма
- Если она была отправлена, отфильтруйте полученные значения
- В зависимости от оператора производите различные математические действия
- В случае деления, проверьте, делитель на равенство с нулем (на ноль делить нельзя)
- Сохраните полученный результат вычисления в переменной
*/
if(isset($_POST["submit"])){
	$result = "Неверный оператор или заполнены все поля";
	if(!empty($_POST["num1"])){
		$num1 = $_POST["num1"];
		if(!empty($_POST["num2"])){
			$num2 = $_POST["num2"];
			if(!empty($_POST["operator"])){
				$operator = $_POST["operator"];
				switch($operator){
					case "*":
						$result = $num1*$num2;
						break;
					case "+":
						$result = $num1+$num2;
						break;
					case "-":
						$result = $num1-$num2;
						break;
					case "/":
						if($num2 != 0){
							$result = $num1/$num2;
						}
						else{
							$result = "На ноль не делим";
						}
						break;
					default:
						$result = "Неверный оператор";
						break;
					}
			}
		}
	}
	echo $result;
}
?>

<!DOCTYPE html">

<html lang="ru">
<head>
	<title>Калькулятор</title>
	<meta charset="utf-8" />
</head>
<body>

	<h1>Калькулятор</h1>

<?php
/*
ЗАДАНИЕ 2
- Если результат существует, выведите его
*/
?>

	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

	Число 1:<br />
	<input type="text" name="num1" /><br /><br />

	Оператор:<br />
	<input type="text" name="operator" /><br /><br />

	Число 2:<br />
	<input type="text" name="num2" /><br /><br />

	<input type="submit" name="submit" value="Считать!" />

</form>

</body>
</html>