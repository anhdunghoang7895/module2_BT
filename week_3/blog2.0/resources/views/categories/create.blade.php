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
	<h1>Add more categogries</h1>
	<form method="post">
		@csrf
		Type: <input type="text" name="type">
		<input type="submit" value="Create">
	</form>
</body>
</html>