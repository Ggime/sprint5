@extends('plantillas.primera')

@section('contenido')

  <section class="iniciar">
    <div class="ingresar">
        <form action='/actividades/agregar' method="post" enctype="multipart/form-data">
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
              <label for="categoria_id">
                <select id="categoria_id" name="categoria_id" class="form-control">
                <option value="">*Categoría</option>
                @foreach ($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                @endforeach
                </select>
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li> {{ $errors->has('actividad')? $errors->actividad : ''}} </li>
                <li><?= isset($errores['apellido'])? $errores['apellido'] : ''; ?></li>
             </ul>
          </div>
          <div class="nombre">
            <label for="barrio_id">
              <select id="barrio_id" name="barrio_id" class="form-control">
              <option value="">*Barrio</option>
              @foreach ($barrios as $barrio)
                <option value="{{$barrio->id}}">{{$barrio->barrio}}</option>
              @endforeach
              </select>
            </label>
            <label for="">
          <input type="text" id="" name="direccion" placeholder="*Dirección" value="{{ old("direccion") }}">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li><?= isset($errores['nombre'])? $errores['nombre'] : ''; ?></li>
                <li><?= isset($errores['apellido'])? $errores['apellido'] : ''; ?></li>
             </ul>
          </div>
          <!--<div class="nombre">
              @foreach ($dias as $value)
                <label>
                  <input type="checkbox" name="dia[]" value="{{$value}}" <?php //echo isChecked(old("dia"), $value); ?>> {{$value}}
                </label>
              @endforeach
              <?php
                /*function isChecked($dias, $value){
                /  if(!$dias){
                    return '';
                  }else{
                    foreach ($dias as $dia) {
                      if($dia == $value){
                        return 'checked';
                      }
                    }
                    return '';
                  }
                }*/
              ?>
          </div>-->
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
                <li><?= isset($errores['nombre'])? $errores['nombre'] : ''; ?></li>
                <li><?= isset($errores['nombre'])? $errores['nombre'] : ''; ?></li>
             </ul>
          <div class="nombre">

            <label for="">
              <input type="text" id="" name="precio" placeholder="*Precio" value={{ old("precio") }}>
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li><?=isset($errores['telefono'])? $errores['telefono'] : ''; ?></li>
                <li><?=isset($errores['email'])? $errores['email'] : ''; ?></li>
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
