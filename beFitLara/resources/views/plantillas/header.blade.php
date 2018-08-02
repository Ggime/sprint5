
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="general">
      <header class="completo">
        <div class="encabezado">
            <a href="/" title="Inicio">
              <div class="logo"></div>
            </a>
          <div class="busqueda">
            <form>
              <div>
                <input class="poner" type="text" id="" name="correo" placeholder="¿Que estás buscando?">
                <button class="buscar" type="button" name="button">Buscar</button>
              </div>
            </form>
          </div>
           <div class="inicio">
             @guest
              <a href="/faq" class="fijo">AYUDA</a>
              <a href="/login" class="fijo">INGRESAR</a>
              <a href="/registro" class="movil">REGISTRARSE</a>
              @else
              <form action="/logout" method="post">
                @csrf
                  <input class="button2" type="submit" value="SALIR">
                  <a href="/faq" class="fijo">AYUDA</a>
              </form>


              <div class="act-contenedor">
                <label class="ul-label" for="ul">ACTIVIDADES +<a href="#" class="actividades"></a></label>
                 <input type="checkbox" class="dar-klik" id="ul">
                   <ul class="menun">
                     <a href="/actividades/veracti">Actividades</a>
                     <a href="/actividades/agregar">Suma tu Actividad</a>
                     <a href="/actividades/listar">Tus actividades</a>
                   </ul>
              </div>
              @endguest
              <div class="act-contenedor">
                <label class="ul-label1" for="ul"><img src="img/flecha.png" height="12" width="22" alt=""><a href="#" class="actividades"></a></label>
                 <input type="checkbox" class="dar-klik" id="ul">
                   <ul class="menun">
                     <label class="ul-label" for="ul">ACTIVIDADES +<a href="#" class="actividades"></a></label>
                    <a href="/actividades/veracti">Actividades</a>
                    <a href="/actividades/agregar">Suma tu Actividad</a>
                    <a href="/actividades/listar">Tus actividades</a>
                   </ul>
              </div>
          </div>
          <nav class="menu">
            <!--<div class="menu-izq">
              <a href="#">Hoy</a>
              <a href="#">Elegir Hora</a>
              <a href="#">Elegir Fecha</a>
            </div>-->
            <div class="menu-derc">
              <a href="/actividades/veracti">Actividades</a>
              <a href="/actividades/agregar">Suma tu actividad</a>
              <a href="/actividades/listar">Tus actividades</a>
            </div>
          </nav>
       </div>
     </header>
