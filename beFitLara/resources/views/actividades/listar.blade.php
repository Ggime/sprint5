@extends('plantillas.primera')

@section('contenido')

  <h2>Listado de Actividades</h2>

  <a href="/agregar">Suma tu Actividad</a>
  <br>
      <ul>
        @foreach ($actividades as $acti)
          <li>{{$acti->nombre}}</li>
        @endforeach
      </ul>


@endsection
