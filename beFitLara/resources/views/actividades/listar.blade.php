@extends('plantillas.primera')

@section('contenido')

  <h2>Listado de Actividades</h2>

  <a href="/actividades/agregar">Suma tu Actividad</a>
  <br>
      <ul>
        @foreach ($actividades as $acti)
        <a href="/actividades/editar"><li>{{$acti->actividad}}</li></a>
        @endforeach
      </ul>


@endsection
