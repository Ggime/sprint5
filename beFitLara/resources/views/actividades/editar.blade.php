@extends('plantillas.primera')

@section('contenido')

  <section class="iniciar">
    <div class="ingresar">
        <form action='' method="post" enctype="multipart/form-data">
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
              <input type="text" id="" name="nombre" placeholder="*Actividad" value="{{ old("nombre") }}">
            </label>
            <label for="">
          <input type="text" id="" name="id_categoria" placeholder="*Categoria" value="{{ old("id_categoria") }}">
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
              <input type="text" id="" name="id_barrio" placeholder="*Barrio" value="{{ old("id_barrio") }}">
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
          <input type="text" id="" name="responsable" placeholder="*Responsable" value="{{ old("responsable") }}">
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
            <label for="">
              <input type="text" id="" name="formato" placeholder="*Formato" value={{ old("formato") }}>
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
          <input type="submit" value="GUARDAR CAMBIOS!">
        </form>
    </div>

  </section>

@endsection
