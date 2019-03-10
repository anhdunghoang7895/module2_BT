<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>	Danh sách khách hàng</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Danh sách khách hàng</h1>
	<table border="1">
		<thead>
			<tr>
				<th>STT</th>
				<th>họ và tên</th>
				<th>số điện thoại</th>
				<th>email</th>
				<th>thao tác</th>
			</tr>
			<tbody>
				<tr>
					<td>1</td>
					<td>Nguyễn Văn A</td>
					<td>01234567890</td>
					<td>email.test@mail.com</td>
					<td>
						<a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a&
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Nguyễn Văn B</td>
						<td>01234567890</td>
						<td>email.test@mail.com</td>
						<td>
							<a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
						</td>
					</tr>
					<tr>
						<td>3</td>
						<td>Nguyễn Văn C</td>
						<td>01234567890</td>
						<td>email.test@mail.com</td>
						<td>
							<a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
						</td>
					</tr>
					<tr>
						<td>4</td>
						<td>Nguyễn Văn D</td>
						<td>01234567890</td>
						<td>email.test@mail.com</td>
						<td>
							<a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
						</td>
					</tr>
					<tr>
						<td>5</td>
						<td>Nguyễn Văn E</td>
						<td>01234567890</td>
						<td>email.test@mail.com</td>
						<td>
							<a href="#">Xem</a> | <a href="#">Sửa</a> | <a href="#">Xóa</a>
						</td>
					</tr>
				</tbody>
			</thead>
		</table><br>
		<a href="{{route('create')}}">create</a>

	</body>
	</html>