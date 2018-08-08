@extends ('plantillas.primera')

@section ('contenido')

<section class="iniciar">
  <div class="ingresar">
      <form action='/register' method="post" id="regis" enctype="multipart/form-data">
        @csrf
        <p>REGISTRATE EN FIT</p>
        <div class="face">
          <p>Inicia sesión con facebook <a href="https://es-la.facebook.com" target="_blank"></a></p>
        </div>
        <br>
        <div class="">
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="name" placeholder="*Tu Nombre" value={{ old("name") }}>
            <div class=""></div>
          </label>
        </div>
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="apellido" placeholder="*Tu Apellido" value={{ old("apellido") }}>
            <div class=""></div>
          </label>
        </div>
        </div>
        <div class="mensajes">
            <ul>
              <li>{{ $errors->has('name')? $errors->first('name') : ''}}</li>
              <li>{{ $errors->has('apellido')? $errors->first('apellido') : ''}}</li>
           </ul>
        </div>
        <div class="">
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="telefono" placeholder="*Un teléfono" value={{ old("telefono") }}>
            <div class=""></div>
          </label>
        </div>
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="email" placeholder="*Tu Email" value={{ old("email") }}>
            <div class=""></div>
          </label>
        </div>
        </div>
        <div class="mensajes">
            <ul>
              <li>{{ $errors->has('telefono')? $errors->first('telefono') : ''}}</li>
              <li>{{ $errors->has('email')? $errors->first('email') : ''}}</li>
           </ul>
        </div>
        <div class="">
        <div class="nombre">
          <label for="">
            <input type="text" id="" name="edad" placeholder="*Edad" value={{ old("edad") }}>
            <div class=""></div>
          </label>
        </div>
        <div class="nombre">
          <label for="barrio_id">
            <select id="barrio_id" name="barrio_id" class="form-control">
            <option value="">*Barrio</option>
            @foreach ($barrios as $barrio)
              <option value="{{$barrio->id}}" {{ (old('barrio_id')==$barrio->id)?'selected':'' }}>{{$barrio->barrio}}</option>
            @endforeach
            </select>
            <div class=""></div>
          </label>
          </div>
        </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('edad')? $errors->first('edad') : ''}}</li>
                <li> {{ $errors->has('barrio_id')? $errors->first('barrio_id') : ''}} </li>
             </ul>
          </div>
          <div class="foto">
            <label for="avatar">
              <input type="file" name="avatar" value="" title="Ingresa tu foto de perfil">
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('avatar')? $errors->first('avatar') : ''}}</li>
             </ul>
          </div>

          <!--<div class="mens">
            <ul>
              <li></li>
            </ul>
          </div>-->
          <div class="">
          <div class="nombre">
            <input type="password" id="passa" name="password" placeholder="Contraseña" value="">
            <div class=""></div>
          </div>
          <div class="nombre">
            <input type="password" id="passb" name="password_confirmation" placeholder="Repetir Contraseña" value="">
          </div>
          <div class="mensa">
            <ul>
              <li>{{ $errors->has('password')? $errors->first('password') : ''}}</li>
              <li>{{ $errors->has('rpass')? $errors->first('rpass') : ''}}</li>
           </ul>
         </div>
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
  <script src="/js/javava.js" charset="utf-8"></script>
  <script src="/js/headuser.js" charset="utf-8"></script>
@endsection
