<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">

</head>
<body>
@include('layout.master')<br>
<h1 align="center">Thêm Blog</h1><br><br>
	<form method="post" align="center">
		@csrf
		<input type="text" name="title" placeholder="tilte"><br><br>
		<textarea name="content" cols="50" rows="10"></textarea>
		<input type="submit" name="save" value="save"><br><br>
	</form>
</body>
</html>