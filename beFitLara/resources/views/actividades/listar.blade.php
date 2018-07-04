@extends('plantillas.primera')

@section('contenido')

  <h2>Listado de Actividades</h2>

  <a href="/agregar">Suma tu Actividad</a>
  <br>
      <ul>
        @foreach ($actividades as $acti)
        <a href="/actividades/editar">{{$acti->actividad}} {{$acti->actividad->formato}} </a>
        @endforeach
      </ul>


@endsection
