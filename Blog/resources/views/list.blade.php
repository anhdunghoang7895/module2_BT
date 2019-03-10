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
	<h1 align="center">Danh Sách blog</h1>
	<table class="table table-striped" border="1" align="center">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">title</th>

			</tr>
		</thead>
		<tbody>
			@if(count($blogs) == 0)
			<tr><td colspan="4">Không có dữ liệu</td></tr>
			@else
			@foreach($blogs as $key => $blog)
			<tr>
				<th scope="row">{{ ++$key }}</th>
				<td>{{ $blog->title }}</td>

				<td><a href="{{ route('showDetail', $blog->id) }}">xem</a></td>
				<td><a href="{{ route('edit', $blog->id) }}">sửa</a></td>
				<td><a href="{{ route('destroy', $blog->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a></td>
			</tr>
			@endforeach
			@endif
		</body>
		</html>