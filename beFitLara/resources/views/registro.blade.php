@extends ('plantillas.primera')

@section ('contenido')

<section class="iniciar">
  <div class="ingresar">
      <form action='/register' method="post" enctype="multipart/form-data">
        @csrf
        <p>REGISTRATE EN FIT</p>
        <div class="face">
          <p>Inicia sesión con facebook <a href="https://es-la.facebook.com" target="_blank"></a></p>
        </div>
        <br>
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="name" placeholder="*Tu Nombre" value={{ old("name") }}>
          </label>
          <label for="">
        <input type="text" id="" name="apellido" placeholder="*Tu Apellido" value={{ old("apellido") }}>
          </label>
        </div>
        <div class="mensajes">
            <ul>
              <li>{{ $errors->has('name')? $errors->first('name') : ''}}</li>
              <li>{{ $errors->has('apellido')? $errors->first('apellido') : ''}}</li>
           </ul>
        </div>
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="telefono" placeholder="*Un teléfono" value={{ old("telefono") }}>
          </label>
          <label for="">
            <input type="text" id="" name="email" placeholder="*Tu Email" value={{ old("email") }}>
          </label>
            </div>
        <div class="mensajes">
            <ul>
              <li>{{ $errors->has('telefono')? $errors->first('telefono') : ''}}</li>
              <li>{{ $errors->has('email')? $errors->first('email') : ''}}</li>
           </ul>
        </div>
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="edad" placeholder="*Edad" value={{ old("edad") }}>
          </label>
        </div>
        <div class="mensajes">
            <ul>
            <li>{{ $errors->has('edad')? $errors->first('edad') : ''}}</li>
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
          </div>
          <div class="mensajes">
              <ul>
                <li> {{ $errors->has('barrio_id')? $errors->first('barrio_id') : ''}} </li>
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
          <div class="nombre">
            <input type="password" id="" name="password" placeholder="Contraseña" value="">
            <input type="password" id="" name="password_confirmation" placeholder="Repetir Contraseña" value="">
          </div>
          <div class="mensa">
            <ul>
              <li>{{ $errors->has('password')? $errors->first('password') : ''}}</li>
              <li>{{ $errors->has('rpass')? $errors->first('rpass') : ''}}</li>
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
