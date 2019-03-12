
@include('layouts.master')
<h2>{{$blog->title}}</h2><br>

<h3>Author: {{$blog->author}}</h3>
<h3>Type: {{$type}}</h3>
{{$blog->content}}