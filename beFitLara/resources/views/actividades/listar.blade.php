@extends('plantillas.primera')

@section('contenido')

<h2><span>Actividades a participar</span></h2>

  <div class="">
  <form class="form-inline" action="#">
      <div class="form-group">
          <input name="q" type="search" class="form-control" placeholder="Buscar...">
          <input type="submit" value="Buscar"></button>
      </div>
  </form>
  </div>
  <br>
      <ul>
        @foreach ($actividades as $acti)
        <div class="nombre">
      {{$acti->actividad}}   {{ $acti->dia}}   {{$acti->hora}}
           <img src="{{ \Storage::disk('public')->url($acti->ruta_imagen) }}">
          <a href="/actividades/editar">
            <img src="../img/editar.png" height="18" width="18" alt="">
          </a>
          <img src="../img/delete.png" height="18" width="18" alt="">
        </div>
        <br>
        @endforeach
      </ul>
<h2>Actividades Registradas</h2>
  <div class="nombre">
    <br>
        <ul>
          @foreach ($actividades as $acti)
          <div class="nombre">
        {{$acti->actividad}}  {{ $acti->dia}}  {{$acti->hora}}
             <img src="{{ \Storage::disk('public')->url($acti->ruta_imagen) }}">
            <a href="/actividades/editar">
              <img src="../img/editar.png" height="18" width="18" alt="">
            </a>
            <form action="/delete" method="POST">
              @csrf
              {{method_field('DELETE') }}
              <button type="submit" name="button">Eliminar</button>
            </form>
          </div>
          <br>
          @endforeach
        </ul>
  </div>

@endsection
