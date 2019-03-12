
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
		<option value="{{$category->id}}">{{$category->type}}</option>
		@endforeach
	</select><br><br>
	<input type="submit" value="Create">
</form>
@if (count($errors) > 0)
<div class="" >
	<ul class="alert-dark">
		@foreach ($errors->all() as $error)
		<li st>{{ $error }}</li><br>
		@endforeach
	</ul>
</div>
@endif