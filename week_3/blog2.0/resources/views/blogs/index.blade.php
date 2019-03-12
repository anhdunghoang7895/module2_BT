<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<!-- Latest compiled and minified CSS -->


</head>
<body>
	@extends('layouts.master')
	@section('content')
	<h1>TRANG CHỦ</h1>

	<h2>Danh Sách blog</h2>

	<table border="1">
		<tr>
			<th scope="col">#</th>
			<th scope="col">title</th>
			<th scope="col">Type</th>
			<th colspan="3" scope="col" class='text-center'>Action</th>
		</tr>
		@foreach($blogs as $key => $blog)
		<tr>
			<th scope="row">{{ ++$key }}</th>
			<td>{{ $blog->title }}</td>
			<td align="center">{{ $blog->category_id }}</td>
			<td><a href="{{route('blogs.show',$blog->id)}}">Show</a></td>
			<td><a href="{{route('blogs.edit',$blog->id)}}">Edit</a></td>
			<td><a href="{{route('blogs.destroy',$blog->id)}}">Delete</a></td>
		</tr>
		@endforeach
	</table>
	@endsection
</body>
</html>