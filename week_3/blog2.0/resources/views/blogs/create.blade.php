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
	<h1>Create blog</h1>
	<form method="post">
		@csrf
		<a>Title</a> <br>
		<input type="text" name="title"><br><br>
		<a>Author</a><br>
		<input type="text" name="author"><br><br>
		<a>Content</a><br>
		<textarea name="content" cols="60" rows="10"></textarea><br>

		<select name="categories">
			@foreach($categories as $key => $category)
			<option value="{{$category->type}}">{{$category->type}}</option>
			@endforeach
		</select><br><br>
		<input type="submit" value="Create">
	</form>
</body>
</html>