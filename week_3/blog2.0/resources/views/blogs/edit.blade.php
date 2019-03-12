@include('layouts.master')
<h1>Edit Information</h1>
<form method="post">
	@csrf
	Title<br>
	<input type="text" name="title" value="{{$blog->title}}"><br><br>
	Content<br>
	<textarea name="content" cols="60" rows="10" >{{$blog->content}}</textarea><br><br>
	<select name="categories">
		@foreach($categories as $key => $category)
		<option value="{{$category->id}}">{{$category->type}}</option>
		@endforeach
	</select><br><br>
	<input type="submit" value="Update">
</form>
