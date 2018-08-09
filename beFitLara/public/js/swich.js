window.addEventListener('load', function(){

 var cambio = document.getElementById('cambio');
 var estilo = document.getElementById('estilo');

 cambio.onclick = function(){
   if (estilo.getAttribute("href") == "/css/estilo2.css"){
     estilo.setAttribute("href", "/css/estilo.css");
     document.cookie = 'tema=noche';
   } else {
    estilo.setAttribute("href", "/css/estilo2.css");
    document.cookie = 'tema=dia';
  }
 }


})
