@extends('plantillas.primera')

@section('contenido')

  <section class="iniciar">
    <div class="ingresar">
        <form action='/actividades/guardar' method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
        @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
          <p>AGREGA TU ACTIVIDAD</p>
          <br>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="actividad" placeholder="*Actividad" value="{{ old("actividad") }}">
            </label>
            <label for="">
          <input type="text" id="" name="categoria_id" placeholder="*Categoria" value="{{ old("categoria_id") }}">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li> {{ $errors->has('actividad')? $errors->actividad : ''}} </li>
                <li>{{ $errors->has('categoria_id')? $errors->categoria_id : ''}}</li>
             </ul>
          </div>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="barrio_id" placeholder="*Barrio" value="{{ old("barrio_id") }}">
            </label>
            <label for="">
          <input type="text" id="" name="direccion" placeholder="*Dirección" value="{{ old("direccion") }}">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('barrio_id')? $errors->barrio_id : ''}}</li>
                <li>{{ $errors->has('direccion')? $errors->direccion : ''}}</li>
             </ul>
          </div>
          <div class="nombre">
            <label for="1">
              <input type="checkbox" name="1" value="lunes">Lunes
              </label>
              <label for="2">
              <input type="checkbox" name="2" value="martes">Martes
              </label>
              <label for="3">
              <input type="checkbox" name="3" value="miercoles">Miercoles
              </label>
              <label for="4">
              <input type="checkbox" name="4" value="jueves">Jueves
              </label>
              <label for="5">
              <input type="checkbox" name="5" value="viernes">Viernes
              </label>
              <label for="6">
              <input type="checkbox" name="6" value="sabado">Sábado
              </label>
              <label for="7">
                <input type="checkbox" name="7" value="sabado">Domingo<br>
            </label>
          </div>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="hora" placeholder="*Hora de inicio" value={{ old("hora") }}>
            </label>
            <label for="">
              <input type="text" id="" name="duracion" placeholder="*Duración en minutos" value={{ old("duracion") }}>
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('hora')? $errors->hora : ''}}</li>
                <li>{{ $errors->has('duracion')? $errors->duracion : ''}}</li>
             </ul>
          <div class="nombre">
            <label for="">
          <input type="text" id="" name="responsable" placeholder="*Responsable" value="{{ old("responsable") }}">
            </label>
            <label for="">
              <input type="text" id="" name="precio" placeholder="*Precio" value={{ old("precio") }}>
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li><?=isset($errores['telefono'])? $errores['telefono'] : ''; ?></li>
                <li>{{ $errors->has('precio')? $errors->precio : ''}}</li>
             </ul>
          </div>
    <div class="foto">
            <label for="name" >
              <input type="file" name="foto" value="<?= isset($_FILES['foto']['tmp'])?$_FILES['foto']['tmp']:'';?>" title="Ingresa tu foto de perfil">
            </label>
          </div>
              <div class="mens">
              <ul>
                <li><?=isset($errores['foto'])? $errores['foto'] : ''; ?></li>
              </ul>
            </div>

  <div class="descripcion">
            <input type="textarea" id="" name="descripcion" placeholder="*Descripción" value={{ old("descripcion") }}>
          </div>
          <input type="submit" value="AGREGAR!">
        </form>
    </div>

  </section>

@endsection
