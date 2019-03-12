
@include('layouts.master')


<h1>Add more categogries</h1>
<form method="post">
	@csrf
	Type: <input type="text" name="type">
	<input type="submit" value="Create">
</form>
@if (count($errors) > 0)
<div>
	<ul class="alert-dark">
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li><br>
		@endforeach
	</ul>
</div>
@endif