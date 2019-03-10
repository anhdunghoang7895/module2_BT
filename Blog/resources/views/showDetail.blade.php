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
	<h1 align="center">Blog Detail</h1>
	Title: {{$blog->title}}<br><br>
	content: {{$blog->content }}<br><br>
	Create time: {{$blog->created_at}}
</body>
</html>