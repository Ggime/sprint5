<!DOCTYPE html>
<html>
  <head>
    <?php
      if(!isset($_COOKIE['tema'])){
        $tema = '/css/estilo.css';
      }else{
        if ($_COOKIE ['tema']=='dia'){
          $tema = '/css/estilo2.css';
        }else{
          $tema = '/css/estilo.css';
        }
      }
      ?>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" id="estilo" href="{{ $tema }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/js/jquery.min.js" charset="utf-8"></script>
    <script src="/js/swich.js" charset="utf-8"></script>
  </head>
  <body>

    @include('plantillas.header')

    @yield('contenido')

    @include('plantillas.footer')

    @yield('scripts')
  </body>
</html>
