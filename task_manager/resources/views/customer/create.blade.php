<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" action="store">
		@csrf
		<input type="number" name="STT" placeholder="số thứ tự"><br>
		<input type="text" name="fullname" placeholder="họ và tên"><br>
		<input type="number" name="phone" placeholder="số điện thoại"><br>
		<input type="text" name="email" placeholder="email"><br>
		<input type="submit" name="save" value="Save"><br>
	</form>
</body>
</html>