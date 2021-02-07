<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReformApp</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <div id="app">
      <div class="navbar">
        <a href="#" class="navbar-brand" >ReformApp</a>
        <ul class="navbar-nav">
          <li><a href="{{ route('projects.create') }}">Publicar Proyecto</a></li>
          <li><a href="{{ route('projects.index') }}">Proyectos</a></li>
          <li><a href="{{ route('profile') }}">Perfil</a></li>
          <li><a href="{{ route('subscriptions.index') }}">Membresia</a></li>
          <li><a href="{{ route('accounts') }}">Mi cuenta</a></li>
        </ul>
      </div>
      @yield('content')
    </div>
  </body>
</html>