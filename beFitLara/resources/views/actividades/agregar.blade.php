@extends('plantillas.primera')

@section('contenido')

  <section class="iniciar">
    <div class="ingresar">
        <form method="post" enctype="multipart/form-data">
          <p>AGREGA TU ACTIVIDAD</p>
          <br>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="nombre" placeholder="*Actividad" value="<?=$nombre??''?>">
            </label>
            <label for="">
          <input type="text" id="" name="genero" placeholder="*Genero" value="<?=$apellido??''?>">
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
              <input type="text" id="" name="horario_desde" placeholder="*Horario desde" value="<?=$telefono??''?>">
            </label>
            <label for="">
              <input type="text" id="" name="horario_hasta" placeholder="*Horario hasta" value="<?=$email??''?>">
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
              <input type="text" id="" name="ubicacion" placeholder="*Ubicación" value="<?=$telefono??''?>">
            </label>
            <label for="">
              <input type="text" id="" name="lugar" placeholder="*Lugar" value="<?=$email??''?>">
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
            <input type="textarea" id="" name="pass" placeholder="Descripción" value="">
          </div>
          <input type="submit" value="AGREGAR!">
        </form>
    </div>
    <div class="regis">
        <img src="img/sport1.png" alt=""class="img_depor">
        <img src="img/sport3.png" alt=""class="img_depor1">
          <br>
        <p>Registrándote en Be-Fit! vas a poder recibir en tu correo lo mejor de la Agenda cada semana!</p>
          <hr>
          <br>
        <p class="imp">Además podés guardar Eventos Favoritos y Subir Actividades!</p>
          <br>
          <hr>
          <br>
        <p>No te quedes afuera, en 1 simple paso podés ser parte de esta comunidad.</p>
    </div>
  </section>

@endsection
