@extends ('plantillas.primera')

@section ('contenido')

<section class="iniciar">
  <div class="ingresar">
      <form method="post" enctype="multipart/form-data">
        <p>REGISTRATE EN FIT</p>
        <div class="face">
          <p>Inicia sesión con facebook <a href="https://es-la.facebook.com" target="_blank"></a></p>

        </div>
        <br>
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="nombre" placeholder="*Tu Nombre" value="<?=$nombre??''?>">
          </label>
          <label for="">
        <input type="text" id="" name="apellido" placeholder="*Tu Apellido" value="<?=$apellido??''?>">
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
            <input type="text" id="" name="telefono" placeholder="*Un teléfono" value="<?=$telefono??''?>">
          </label>
          <label for="">
            <input type="text" id="" name="email" placeholder="*Tu Email" value="<?=$email??''?>">
          </label>
            </div>
        <div class="mensajes">
            <ul>
              <li><?=isset($errores['telefono'])? $errores['telefono'] : ''; ?></li>
              <li><?=isset($errores['email'])? $errores['email'] : ''; ?></li>
           </ul>
        </div>

        <div class="selectores">
          <label for="">
            <select name="edad">
              <option selected="true" disabled="disabled">Edad</option>

            </select>
        </label>
        </div>
        <div class="mensaje1">
              <?= isset($errores['edad'])? $errores['edad'] : ''; ?>
              </div>
              <div class="selectores">
  <label for="">
      <select name="barrio">
          <option>Elegi tu Barrio</option>
            <
      </select>
  </label>
  </div>
  <div class="mensaje1">
        <?=isset($errores['barrio'])? $errores['barrio'] : ''; ?>
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

<div class="nombre">
        <input type="password" id="" name="pass" placeholder="Contraseña" value="">
        <input type="password" id="" name="rpass" placeholder="Repetir Contraseña" value="">
        </div>
        <div class="mensa">
            <ul>
              <li><?=isset($errores['pass'])? $errores['pass'] : ''; ?></li>
              <li><?=isset($errores['rpass'])? $errores['rpass'] : ''; ?></li>
           </ul>
        </div>
        <div class="oki">
          <label class="ok">
            <input type="checkbox" name="newsletter" value="newsletter"> Quiero recibir novedades de FIT<br>
            <span class="checkmark"></span>
          </label>
        </div>
        <input type="submit" value="SUMATE!">
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
