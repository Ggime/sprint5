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
          <input type="text" id="" name="id_categorias" placeholder="*Categoria" value="{{ old("id_categorias") }}">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li> {{ $errors->has('actividad')? $errors->actividad : ''}} </li>
                <li><?= isset($errores['apellido'])? $errores['apellido'] : ''; ?></li>
             </ul>
          </div>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="id_barrios" placeholder="*Barrio" value="{{ old("id_barrios") }}">
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
          <div class="nombre">
            <label for="">
          <input type="text" id="" name="dia" placeholder="*Dia" value="{{ old("dia") }}">
            </label>
            <label for="">
          <input type="text" id="" name="responsable" placeholder="*Dictado por" value="{{ old("responsable") }}">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li><?= isset($errores['nombre'])? $errores['nombre'] : ''; ?></li>
                <li><?= isset($errores['nombre'])? $errores['nombre'] : ''; ?></li>
             </ul>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="horario_desde" placeholder="*Horario desde" value={{ old("horario_desde") }}>
            </label>
            <label for="">
              <input type="text" id="" name="horario_hasta" placeholder="*Horario hasta" value={{ old("horario_hasta") }}>
            </label>
              </div>
          <div class="mensajes">
              <ul>
                <li><?=isset($errores['telefono'])? $errores['telefono'] : ''; ?></li>
                <li><?=isset($errores['email'])? $errores['email'] : ''; ?></li>
             </ul>
          </div>
          <div class="nombre">
            <label for="id_formatos">
              <select class="form-control" id="id_formatos" name="id_formatos">
                <option value="">Formato</option>
                @foreach ($formatos as $formi)
                  <option value="{{$formi->id}}">{{$formi->formato}}</option>
                @endforeach
              </select>
              <input type="text" id="" name="id_formatos" placeholder="*Formato" value={{ old("id_formatos") }}>
            </label>
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
