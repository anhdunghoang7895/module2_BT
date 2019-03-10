<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@include('layouts.master')
	<h1>Edit Information</h1>
	<form method="post">
		@csrf
		<input type="text" name="type">
		<input type="submit" value="Update">
	</form>
</body>
</html>