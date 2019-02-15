<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post">
		<input type="texl" name="Size">
		<input id="submit" type="submit" name="submit" value="NhapSize">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sizeOfArray = $_POST["Size"];
		$daySo= array();
		if ($sizeOfArray==null) {
			echo "nhập size";
		}
		else{
			for ($i=0; $i < $sizeOfArray; $i++) {
			$rng = rand(0,10000);
			array_push($daySo, $rng);
			$minNum= $daySo[0];
			}
			for ($i=0; $i < count($daySo); $i++) { 
			if ($minNum > $daySo[$i]) {
				$minNum = $daySo[$i];
				}
			}
			echo "số lớn nhất trong dãy ".$minNum."<br>";
		}
		print_r($daySo);
}
?>
</body>
</html>