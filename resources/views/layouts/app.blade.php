<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReformApp</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    <div id="app">
      <div class="navbar">
        <a href="#" class="navbar-brand" >ReformApp</a>
        <ul class="navbar-nav">
          <li><a href="{{ route('projects.create') }}">Publicar Proyecto</a></li>
          <li><a href="{{ route('projects.index') }}">Trabajos</a></li>
          <li><a href="{{ route('profile') }}">Perfil</a></li>
          <li><a href="membership.html">Membresia</a></li>
          <li><a href="account.html">Mi cuenta</a></li>
        </ul>
      </div>
      @yield('content')
    </div>
  </body>
</html>