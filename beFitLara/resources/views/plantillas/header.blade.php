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
           <div class="act-contenedor">
             <label class="ul-label" for="ul">ACTIVIDADES+<a href="#" class="actividades"></a></label>
              <input type="checkbox" class="dar-klik" id="ul">
                <ul class="menun">
                  <li><a href="/actividades/veracti">Actividades</a></li>
                  <li><a href="/actividades/agregar">Suma tu Actividad</a></li>
                  <li><a href="/actividades/listar">Tus actividades</a></li>
                </ul>
           </div>
           @else
           <form action="/logout" method="post">
             @csrf
             &nbsp; <a href="/faq" class="fijo">AYUDA</a>
               <input class="button2" type="submit" value="SALIR">
               <div class="act-contenedor">
                &nbsp; <label class="ul-label" for="ul">ACTIVIDADES+<a href="#" class="actividades"></a></label>
                  <input type="checkbox" class="dar-klik" id="ul">
                    <ul class="menun">
                      <li><a href="/actividades/veracti">Actividades</a></li>
                      <li><a href="/actividades/agregar">Suma tu Actividad</a></li>
                      <li><a href="/actividades/listar">Tus actividades</a></li>
                    </ul>
               </div>
           </form>
             @endguest
        </div>
        <nav class="menu">
          <div class="menu-izq">
            <a href="/actividades/veracti">Actividades</a>
            <a href="/actividades/agregar">Suma tu Actividad</a>
            <a href="/actividades/listar">Tus actividades</a>
          </div>
        </nav>
   </div>
 </header>
