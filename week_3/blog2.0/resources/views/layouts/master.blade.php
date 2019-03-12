<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/blog.css">
<ul class="a">
	<li><a href="{{route('blogs.index')}}">Home</a></li>
	<li><a href="{{route('blogs.create')}}">Create Blog</a></li>
	<li><a href="{{route('blogs.about')}}">About</a></li>
	<div class="dropdown">
		<span>Admin</span>
		<div class="dropdown-content">
			<li><a href="{{route('categories.index')}}">Categories</a></li>
			<li><a href="{{route('categories.create')}}">Create</a></li>
		</div>
	</div>
</ul>
@yield('content')

