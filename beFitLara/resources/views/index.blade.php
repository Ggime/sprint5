@extends ('plantillas.primera')

@section ('contenido')

<section>
  <article class="articulo1">
    <div class="sport">
      <div class="sport1"><img src="img/logo.png" alt="">  </div>
      <div class="sport2"><img src="img/bafit.png" alt="">   </div>
       </div>
    <div class="info">
        <h1>¿Donde hacer deporte en Buenos Aires?</h1><br>
          <p>No todos los lugares donde hacer gimnasia son iguales ni tampoco todos los eligen por las mismas razones, pero hay algunas cosas a tener en cuenta a la hora de escoger un lugar donde entrenar, ya que es un lugar que vas a frecuentar y en el que tenés que sentirte a gusto. Además de la estética y el precio hay otros factores que influyen en la decisión en elegir un lugar. Esta web te ayuda a encontrar TU lugar, TU actividad y TU horario pero sobre todo ofrece conectividad entre la comunidad de Be-Fit! donde podes ingresar tu actividad para ponerte en contacto con otras personas  y así conformar tu propio equipo de entrenamiento.</p><br>
      </div>
  </article>
</section>
<section class="articulo2">
   <article class="deportes">
     <div class="imagenT">
       <img src="img/acti.png" alt="">
     </div>
     <div class="imagen6">
       <img src="img/reco1.png" alt="">
     </div>

     <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
            <img src="img/sport.png" style="width:100%">
          <div class="text">Running</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="img/sport2.png" style="width:100%">
          <div class="text">Yoga</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="img/sporta.png" style="width:100%">
          <div class="text">Gimnasia</div>
        </div>

        <a class="prev">&#10094;</a>
        <a class="next">&#10095;</a>
      </div>

</article>
 </section>
 <section class="articulo2">
   <article class="deportes1">
     <div class="imagenT">
       <img src="img/acti3.png" alt="">
     </div>
     <div class="imagen6">
       <img src="img/fav1.png" alt="">
     </div>
       <div class="imagen">
         <img src="img/dep2.png" class="deporte" alt="">
       </div>
       <div class="imagen">
         <img src="img/depor6.png" class="deporte" alt="">
       </div>
       <div class="imagen">
         <img src="img/depor0.png" class="deporte" alt="">
       </div>
     </article>
   </section>

@endsection

@section('scripts')
  <script src="/js/bafit.js" charset="utf-8"></script>
  <script src="/js/headuser.js" charset="utf-8"></script>
  <script src="/js/swich.js" charset="utf-8"></script>

@endsection
