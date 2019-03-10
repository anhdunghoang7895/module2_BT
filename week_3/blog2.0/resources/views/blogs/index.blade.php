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
	<h1>TRANG CHỦ</h1>
	<h2>Danh Sách blog</h2>
	<table border="1">
		<tr>
			<th scope="col">#</th>
			<th scope="col">title</th>
		</tr>
		@foreach($blogs as $key => $blog)
		<tr>
			<th scope="row">{{ ++$key }}</th>
			<td>{{ $blog->title }}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>