window.addEventListener('load', function(){

 var cambio = document.getElementById('cambio');
 var estilo = document.getElementById('estilo');

 cambio.onclick = function(){
   if (estilo.getAttribute("href") == "/css/estilo2.css"){
     estilo.setAttribute("href", "/css/estilo.css");
   } else {
    estilo.setAttribute("href", "/css/estilo2.css");
  }
 }
})
