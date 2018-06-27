<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/estilo.css">
  </head>
  <body>

    @include('plantillas.header')

    @yield('contenido')
    @yield('registro')
    @yield('login')
    @yield('faq')


    @include('plantillas.footer')

  </body>
</html>
