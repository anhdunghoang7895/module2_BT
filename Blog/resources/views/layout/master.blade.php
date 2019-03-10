<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
    @section('sidebar')
    <table border="1" align="center">
        <tr>
            <th><a href="{{route('index')}}">Home Page</a></th>
            <th><a href="{{route('about')}}">About</a></th>
            <th><a href="{{route('create')}}">Make a new aticle</a></th>
            <th><a href="{{route('list')}}">Aticles</a></th>
        </tr>
    </table>
    @show

    <div class="container">
        @yield('content')
    </div>
</body>
</html>