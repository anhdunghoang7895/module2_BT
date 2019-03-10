<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Máy Tính</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="add" method="get">
		<input type="number" placeholder="nhập số" name="firstNum">
		<input type="number" placeholder="nhập số" name="secondNum"><br><br>
		<button type="submit" value="add">Cộng (+)</button>
		<button type="submit" value="minus">Trừ (-)</button>
		<button type="submit" value="multi">Nhân (*)</button>
		<button type="submit" value="div">Chia (/)</button>
	</form>

	kết quả là : {{$giatri}};
</body>
</html>