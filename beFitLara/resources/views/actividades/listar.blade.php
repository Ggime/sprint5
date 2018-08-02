@extends('plantillas.primera')

@section('contenido')

  <br>
  <div class="actividad">
    <h2>Actividades a Participar</h2>
<div class="paginate">
      {{ $misActividades->links() }}
</div>
    @csrf

      <table>
        <tr>
          <th>Actividad</th>
          <th>Categoria</th>
          <th>Barrio</th>
          <th>Direccion</th>
          <th>Respons.</th>
          <th>Dia</th>
          <th>Hs</th>
          <th><img src="../img/time.png" height="18" width="18" alt="" title="Duracion en Minutos"></th>
          <th>$</th>
          <!--<th>Poster</th>-->
          <th></th>
        </tr>

      <ul>
        @foreach ($misActividades as $acti)
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
        <td><form action="/actividades/e/{{$acti->id}}" method="POST">
          @csrf
          {{method_field('DELETE') }}
          <button class="button" type="submit" name="button" title="Eliminar"><b>X</b></button>
        </form></td>
        @endforeach
      </ul>
    </table>

<br>

    @csrf

      <h2>Actividades Registradas</h2>
      <div class="paginate">
        {{ $actividades->links() }}
      </div>
      <table>
        <tr>
          <th>Actividad</th>
          <th>Categoria</th>
          <th>Barrio</th>
          <th>Direccion</th>
          <th>Dia</th>
          <th>Hs</th>
          <th><img src="../img/time.png" height="18" width="18" alt="" title="Duracion en Minutos"></th>
          <th>$</th>
          <!--<th>Poster</th>-->
          <th></th>
          <th></th>
        </tr>

          @foreach ($actividades as $acti)
            <tr>
            <td>{{$acti->actividad}}</td>
            <td>{{$acti->categoria->categoria}}</td>
            <td>{{$acti->barrio->barrio}}</td>
            <td>{{$acti->direccion}}</td>
            <td>{{$acti->dia}}</td>
            <td>{{$acti->hora}}</td>
            <td>{{$acti->duracion}}</td>
            <td>{{$acti->precio}}</td>
            <!--<td><img src="{{ \Storage::disk('public')->url($acti->ruta_imagen) }}"></td>-->
            <td><a href="/actividades/editar/{{$acti->id}}">
              <img src="../img/editar.png" alt="" title="Editar" class="editar">
            </a></td>
            <td><form action="/actividades/{{$acti->id}}" method="POST">
              @csrf
              {{method_field('DELETE') }}
              <button class="button" type="submit" name="button" title="Eliminar"><b>X</b></button>
            </form></td>
            </tr>
          @endforeach
        </table>

      </div>

@endsection
