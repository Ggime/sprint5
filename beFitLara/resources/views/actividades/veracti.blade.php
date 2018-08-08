@extends('plantillas.primera')

@section('contenido')
<div class="actividad"><br>
<h2><span>Actividades Disponibles</span></h2><br>
    <div class="control">
      <form action="#" >
          <input name="q" type="search" class="form-control" placeholder="Buscar...">
          <input type="submit" value="Buscar"></button>
      </form>
      <br>

    </div>
<form class="" action="/actividades/anotarme" method="post">
  @csrf

    <table>
      <tr>
        <th>Actividad</th>
        <th>Categoria</th>
        <th>Barrio</th>
        <th>Direccion</th>
        <th>Respons.</th>
        <th>Dia</th>
        <th>Hs.</th>
        <th><img src="../img/time.png" height="18" width="18" alt="" title="Duracion en Minutos"></th>
        <th>$</th>
        <!--<th>Poster</th>-->
        <th></th>
      </tr>

        @foreach ($actividades as $acti)
        <tr>
        <td>{{$acti->actividad}}</td>
        <td>{{$acti->categoria->categoria}}</td>
        <td>{{$acti->barrio->barrio}}</td>
        <td>{{$acti->direccion}}</td>
        <td>{{$acti->user->name}}</td>
        <td>{{$acti->dia}}</td>
        <td>{{$acti->hora}}</td>
        <td>{{$acti->duracion}}</td>
        <td>{{$acti->precio}}</td>
          <!--<td><img src="{{ \Storage::disk('public')->url($acti->ruta_imagen) }}"></td>-->
          <td><button class="button1" type="submit" value="{{$acti->id}}" name="anotarme" title="Anotarme">+</button></td>
          </tr>

        @endforeach

      </table>
    </form>
    <div class="paginate">
      {{ $actividades->links() }}
    </div>
  </div>
  <script src="/js/headuser.js" charset="utf-8"></script>

@endsection
