@extends('layout')

@section('content')


<div class="container">
    <div class="row header">
      <h1 class="contacto">Contacta con nosotr@s</h1>
      <h3>Rellena el formulario para obtener información</h3>
    </div>
    <div class="row body">
      <form action="#">
        <ul>

          <li>
            <p class="left">
              <label for="first_name">Nombre</label>
              <input type="text" name="first_name" placeholder="John" />
            </p>
            <p class="pull-right">
              <label for="last_name">Apellidos</label>
              <input type="text" name="last_name" placeholder="Smith" />
            </p>
          </li>

          <li>
            <p>
              <label for="email">email <span class="req">*</span></label>
              <input type="email" name="email" placeholder="john.smith@gmail.com" />
            </p>
          </li>
          <li><div class="divider"></div></li>
          <li>
            <label for="comments">comentarios</label>
            <textarea cols="46" rows="3" name="comments"></textarea>
          </li>

          <li>
            <input class="btn btn-submit" type="submit" value="Enviar" />
            <small>o pulsa <strong>enter</strong></small>
          </li>

        </ul>
      </form>
    </div>
  </div>

@endsection
