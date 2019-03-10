<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	@include('layouts/master')
	<table border="1">
		<tr>
			<th>ID</th>
			<th>Type</th>
		</tr>
		@foreach($category as $key => $category)
		<tr>
			<th scope="row">{{ ++$key }}</th>
			<th>{{ $category->type }}</th>
			<td><a href="{{ route('categories.edit', $category->id) }}">Edit</a></td>
			<td><a href="{{ route('categories.destroy', $category->id) }}">Delete</a></td>

		</tr>
		@endforeach
	</table>
</body>
</html>