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
		<input type="texl" name="searchNumb">
		<input id="submit" type="submit" name="submit" value="delete">
	</form>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$sizeOfArray = $_POST["Size"];
		$numberSearch = $_POST["searchNumb"];
		$daySo= array();
		if ($sizeOfArray==null) {
			echo "nhập size";
		}
		else{
			for ($i=0; $i < $sizeOfArray; $i++) {
				$rng = rand(0,10000);
				array_push($daySo, $rng);
			}
			for ($i=0; $i < $sizeOfArray; $i++) {
				if($numberSearch == $daySo[$i]){
					unset($daySo[$i]);
					echo "deleted!";
			}
		}
	}
		print_r($daySo);
}
?>
</body>
</html>