
@include('layouts.master')
<h1>Edit Information</h1>
<form method="post">
	@csrf
	<input type="text" name="type" value="{{$category}}">
	<input type="submit" value="Update">
</form>
