<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@include('layout.master')<br><br>
	<h1 align="center">Chỉnh Sửa Thông Tin</h1><br><br>
	<form method="post" align="center">
		@csrf
		<input type="text" name="title" placeholder="title" required><br><br>
		<input type="text" name="content" placeholder="content" required><br><br>
		<input type="submit" value="update">
	</form>
</body>
</html>