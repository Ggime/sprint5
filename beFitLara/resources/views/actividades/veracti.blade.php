@extends('plantillas.primera')

@section('contenido')

<h2><span>Actividades Disponibles</span></h2>

  <div class="pull-right">
  <form class="form-inline" action="#">
      <div class="form-group">
          <input name="q" type="search" class="form-control" placeholder="Buscar...">
          <input type="submit" value="Buscar"></button>
      </div>

  </form>
  </div>

<form class="" action="/actividades/anotarme" method="post">
  @csrf
  <div class="nombre">
    <table>
      <tr>
        <th>Actividad</th>
        <th>Categoria</th>
        <th>Barrio</th>
        <th>Direccion</th>
        <th>Responsable</th>
        <th>Dia</th>
        <th>Hora</th>
        <th>Duracion</th>
        <th>Precio $</th>
        <th>Poster</th>
        <th></th>
      </tr>

        @foreach ($actividades as $acti)
          <tr>
          <td>{{$acti->actividad}}</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>{{$acti->dia}}</td>
          <td>{{$acti->hora}}</td>
          <td>{{$acti->duracion}}</td>
          <td></td>
          <td><img src="{{ \Storage::disk('public')->url($acti->ruta_imagen) }}"></td>
          <td><button type="submit" value="{{$acti->id}}" name="anotarme">Anotarme</button></td>
          </tr>

        <br>
        @endforeach
    </div>
      </table>

    </form>


@endsection
