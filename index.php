<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p>
		<?php
			if( isset($_POST['a']) && isset($_POST['b']) ) {
				$sum = $_POST['a'] + $_POST['b'];
				echo "Сумма a и b = $sum";
			}
		?>

	</p>
	<form action="" method="POST">
		<input type="number" name="a">
		<input type="number" name="b">
		<button type="submit">Рассчитай</button>
	</form>
</body>
</html>