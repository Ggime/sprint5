@extends('plantillas.primera')

@section('contenido')

  <section class="iniciar">
    <div class="ingresar">
        <form action="/actividades/editar/{{$actividad->id}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
        <!--@if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif-->
          <p>EDITA TU ACTIVIDAD</p>
          <br>
          <div class="nombre">
            <label for="actividad">
              <input type="text" id="" name="actividad" placeholder="*Actividad" value="{{$actividad->actividad}}" >
            </label>
            <!--<label for="">
              <input type="text" id="" name="responsable" placeholder="*Responsable">
            </label>
          </div>-->
            <div class="mensajes">
                <ul>
                  <li> {{ $errors->has('actividad')? $errors->first('actividad'):''}} </li>
               </ul>
            </div>
            <div class="nombre">
             <label for="categoria_id">
                <select id="categoria_id" name="categoria_id" class="form-control">
                <option value="">*Categoría</option>

                @foreach ($categorias as $categoria)
                  @if ($categoria->id === $actividad->categoria->id)
                    <option selected value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                  @else
                  <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                  @endif
                @endforeach
                </select>
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li> {{ $errors->has('categoria_id')? $errors->first('categoria_id') : ''}} </li>
             </ul>
          </div>
          <div class="nombre">
            <label for="barrio_id">

              <select id="barrio_id" name="barrio_id" class="form-control">
              <option value="">*Barrio</option>
              @foreach ($barrios as $barrio)
                @if ($barrio->id === $actividad->barrio->id)
                  <option selected value="{{$barrio->id}}">{{$barrio->barrio}}</option>
                @else
                  <option value="{{$barrio->id}}">{{$barrio->barrio}}</option>
                @endif
              @endforeach
              </select>
            </label>
            </div>
            <div class="mensajes">
                <ul>
                  <li> {{ $errors->has('barrio_id')? $errors->first('barrio_id') : ''}} </li>
               </ul>
            </div>
            <div class="nombre">
            <label for="direccion">
          <input type="text" id="" name="direccion" placeholder="*Dirección" value="{{$actividad->direccion}}">
            </label>
              <label for="dia">
                <input type="text" id="" name="dia" placeholder="*Dias de clase" value="{{$actividad->dia}}">
              </label>
            </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('direccion')? $errors->first('direccion') : ''}}</li>
                <li>{{ $errors->has('dia')? $errors->first('dia') : ''}}</li>
             </ul>
          </div>
          <div class="nombre">
            <label for="hora">
              <input type="text" id="" name="hora" placeholder="*Hora de inicio" value="{{$actividad->hora}}">
            </label>
            <label for="duracion">
              <input type="text" id="" name="duracion" placeholder="*Duración en minutos" value="{{$actividad->duracion}}">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('hora')? $errors->first('hora') : ''}}</li>
                <li>{{ $errors->has('duracion')? $errors->first('duracion') : ''}}</li>
             </ul>
          <div class="nombre">

            <label for="precio">
              <input type="text" id="" name="precio" placeholder="*Precio" value="{{$actividad->precio}}">
            </label>
            <label for="descripcion" >
                <input type="text" id="" name="descripcion" placeholder="*Descripción" value="{{$actividad->descripcion}}">
            </label>
          </div>
          </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('precio')? $errors->first('precio') : ''}}</li>
                <li>{{ $errors->has('descripcion')? $errors->first('descripcion') : ''}}</li>
             </ul>
          </div>
    <!--<div class="foto">
            <label for="name" >
                <input type="file" name="poster" value="">

            </label>
          </div>-->
          <input type="submit" value="AGREGAR!">
        </form>
    </div>
  </div>
  </section>


@endsection
