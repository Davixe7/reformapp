<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ReformApp</title>
    <meta name="viewport" content="width=device-width; initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  </head>
  <body>
    <div id="app">
      <div class="navbar">
        <a href="#" class="navbar-brand">
          ReformApp
        </a>
        <ul class="navbar-nav">
          <li><a href="{{ route('projects.create') }}">Publicar Proyecto</a></li>
          <li><a href="{{ route('projects.index') }}">Proyectos</a></li>
          <li><a href="{{ route('profile') }}">Perfil</a></li>
          <li><a href="{{ route('subscriptions.index') }}">Membresía</a></li>
          <li><a href="{{ route('accounts') }}">Mi cuenta</a></li>
        </ul>
        <div class="sidenav-toggler">
          <i class="material-icons">menu</i>
        </div>
      </div>
      @yield('content')
    </div>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
  </body>
</html>