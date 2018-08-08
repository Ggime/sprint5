@extends('plantillas.primera')

@section('contenido')

<section class="iniciar">
  <div class="ingresar">
      <form method="post" action="{{route('login')}}" enctype="multipart/form-data">
        @csrf

        <p>BIENVENIDO A LA COMUNIDAD BE-FIT!
          <br> Inicia tu sesión para conocer todas las actividades.</p>
        <div class="face">
          <p>Inicia sesión con facebook <a href="https://es-la.facebook.com" target="_blank"></a></p>

        </div>
        <br>
        <div class="">
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="email" placeholder="Tu Email" value="">
          </label>
          </div>
          <div class="nombre">
          <label for="" class="pass">
            <input type="password" id="" name="password" placeholder="Contraseña" value="">
          </label>
        </div>
        </div>
        <div class="mensajes">
            <ul>
              <li><?//=isset($errores['email'])? $errores['email'] : ''; ?></li>
              <li><?//=isset($errores['pass'])? $errores['pass'] : ''; ?></li>
           </ul>
        </div>
         <div class="recor">
           <p><a href="registro_responsive.php">¿Olvidaste tu contrasena?</a>¿No sos usuario? <a href="registro_responsive.php">Registrate!</a></p>
         </div>

        <div class="oki">
          <label class="ok">
            <input type="checkbox" name="recordar" value="recordar"> Recordarme<br>
            <span class="checkmark"></span>
          </label>
        </div>
        <input type="submit" value="INGRESAR">
      </form>
  </div>
  <div class="regis">
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
