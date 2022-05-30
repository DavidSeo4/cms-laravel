@extends('layout')

@section('content')

<h1>Videoclub Panoramix</h1>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,800,300" rel="stylesheet" type="text/css"/>
<h2>Todo las películas que buscas a un clik de distancia</h2>

<nav class="nav">
  <ul class="nav__menu">
    <li class="nav__menu-item"><a>Acción</a></li>
    <li class="nav__menu-item"><a>Familiar</a>
      <ul class="nav__submenu">
        <li class="nav__submenu-item"> <a>Niños</a></li>
        <li class="nav__submenu-item"> <a>Trabajo</a></li>
        <li class="nav__submenu-item"> <a>Ocio</a></li>
      </ul>
    </li>
    <li class="nav__menu-item"><a>Fantasía</a>
    </li>
    <li class="nav__menu-item"><a>Ocio</a></li>
    <li class="nav__menu-item"><a>Más...</a>
        <ul class="nav__submenu">
            <li class="nav__submenu-item"> <a>Our Company</a></li>
            <li class="nav__submenu-item"> <a>Our Team</a></li>
            <li class="nav__submenu-item"> <a>Our Reach</a></li>
          </ul></li>
  </ul>
</nav>
<img class="panoramix" src="https://i.pinimg.com/originals/5e/94/7f/5e947f81e0cf1a9b306788911d8f781f.png" alt="">
@endsection
