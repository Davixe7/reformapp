<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReformApp</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <style media="screen">
      #app {
        font-family: 'Mulish';
      }
    </style>
  </head>
  <body>
    <div id="app">
      <div class="navbar">
        <a href="#" class="navbar-brand" >[ ReformApp ]</a>
        <ul class="navbar-nav">
          <li><a href="{{ route('projects.create') }}">Publicar Proyecto</a></li>
          <li><a href="{{ route('projects.index') }}">Proyectos</a></li>
          <li><a href="{{ route('profile') }}">Perfil</a></li>
          <li><a href="{{ route('subscriptions.index') }}">Membresía</a></li>
          <li><a href="{{ route('accounts') }}">Mi cuenta</a></li>
        </ul>
      </div>
      @yield('content')
    </div>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  </body>
</html>