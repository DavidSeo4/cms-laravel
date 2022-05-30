<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Laravel en minutes</title>




</head>
<body>

    <ul class="menu">
        <li>   <a href="{{ route( 'home') }}"> Home </a>  </li>
        <li>   <a href="{{ route( 'about') }}"> Acerca de... </a>  </li>
        <li>   <a href="{{ route( 'blog.index') }}"> Blog </a>  </li>
        <li>   <a href="{{ route( 'contact') }}"> Contacto </a>  </li>

    </ul>

<div id="app">
    @yield('content')
</div>
</body>
</html>
