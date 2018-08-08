@extends('plantillas.primera')

@section('contenido')

  <section class="iniciar">
    <div class="ingresar">
        <form action='/actividades/agregar' id="agract" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
      <!--  @if (count($errors)>0)
          <div class="">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif-->
          <p>AGREGA TU ACTIVIDAD</p>
          <br>
          <div class="">
          <div class="nombre">
            <label for="actividad">
              <input type="text" id="" name="actividad" placeholder="*Actividad" value="{{ old("actividad") }}">
              <div class=""></div>
            </label>
            </div>
            <div class="nombre">
              <label for="categoria_id">
                <select id="categoria_id" name="categoria_id" class="form-control">
                <option value="">*Categoría</option>
                @foreach ($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->categoria}}</option>
                @endforeach
                </select>
                <div class=""></div>
            </label>
            </div>
          </div>
          <div class="mensajes">
                <ul>
                 <li> {{ $errors->has('actividad')? $errors->first('actividad'):''}} </li>
                 <li> {{ $errors->has('categoria_id')? $errors->first('categoria_id') : ''}} </li>
                </ul>
          </div>
          <div class="">
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="hora" placeholder="*Hora de inicio" value={{ old("hora") }}>
              <div class=""></div>
            </label>
          </div>
          <div class="nombre">
            <label for="">
              <input type="text" id="" name="duracion" placeholder="*Duración en minutos" value={{ old("duracion") }}>
              <div class=""></div>
            </label>
          </div>
        </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('hora')? $errors->first('hora') : ''}}</li>
                <li>{{ $errors->has('duracion')? $errors->first('duracion') : ''}}</li>
             </ul>
          </div>
          <div class="">
          <div class="nombre">
            <label for="barrio_id">
              <select id="barrio_id" name="barrio_id" class="form-control">
              <option value="">*Barrio</option>
              @foreach ($barrios as $barrio)
                <option value="{{$barrio->id}}">{{$barrio->barrio}}</option>
              @endforeach
              </select>
              <div class=""></div>
            </label>
            </div>
            <div class="nombre">
            <label for="">
              <input type="text" id="" name="direccion" placeholder="*Dirección" value="{{ old("direccion") }}">
              <div class=""></div>
            </label>
            </div>
            <div class="mensajes">
                <ul>
                  <li> {{ $errors->has('barrio_id')? $errors->first('barrio_id') : ''}} </li>
                  <li>{{ $errors->has('direccion')? $errors->first('direccion') : ''}}</li>
               </ul>
            </div>
            <div class="">
            <div class="nombre">
              <label for="">
                <input type="text" id="" name="dia" placeholder="*Dias de clase" value={{ old("dia") }}>
                <div class=""></div>
              </label>
            </div>
            <div class="nombre">
              <label for="">
                <input type="text" id="" name="precio" placeholder="*Precio" value={{ old("precio") }}>
                <div class=""></div>
              </label>
            </div>
            </div>
            <div class="mensajes">
                <ul>
                <li>{{ $errors->has('dia')? $errors->first('dia') : ''}}</li>
                <li>{{ $errors->has('precio')? $errors->first('precio') : ''}}</li>
               </ul>
            </div>
            <div class="">
            <label for="" >
                <input type="text" id="" name="descripcion" placeholder="*Descripción" value={{ old("descripcion") }}>
                <div class=""></div>
            </label>
          </div>
          <div class="mensajes">
              <ul>
                <li>{{ $errors->has('descripcion')? $errors->first('descripcion') : ''}}</li>
             </ul>
          </div>
          <input type="submit" value="AGREGAR!">
        </form>
    </div>
  </div>
  <div class="regis">
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
  <script src="/js/acti.js" charset="utf-8"></script>
  <script src="/js/headuser.js" charset="utf-8"></script>
@endsection
