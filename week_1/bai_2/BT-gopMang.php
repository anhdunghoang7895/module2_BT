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
		Nhập mảng 1:<input type="texl" name="mang1">
		Nhập mảng 2:<input type="texl" name="mang2">
		<input id="submit" type="submit" name="submit" value="input">
	</form>
	<?php  
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$file = file("Array.txt");
		$file = fopen("Array.txt","w+");
		$First = $_POST["mang1"];
		// $Second = $_POST["mang2"];
		$sizeFirst = 8;
		// $sizeSecond = 9;
		$count1=0;
		// $count2=0;
		$mang_1= array();
		// $mang_2= array();
		if ($count1 < $sizeFirst){
			$mang_1[$count1] = $First;
			$count1++;
			$file = fwrite($file,$First);
			
			print_r($mang_1);
		}
	}
	fclose("Array.txt");
	?>
</body>
</html>