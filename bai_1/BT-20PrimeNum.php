<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$i = 0;
	$count =0;
	function Number($n)
	{
		if ($n < 2) {
			return false;
		}
		for ($i = 2; $i <= sqrt($n); $i++) {
			if ($n % $i == 0) {
				return false;
			}
		}
		return true;
	}
	echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
	while($count < 20){
		
		if (Number($i)) {
			echo($i . " ");	
			$count++;
			$i++;
		}
	}
	?>
</body>
</html>