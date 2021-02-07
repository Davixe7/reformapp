@extends('layouts.app')
@section('content')
<section id="profile" style="width: 50%;">
  <div class="container">
    <h1>
      Mi Cuenta
    </h1>
    <div class="card" style="margin-bottom: 20px;">
      Lorem ipsum dolor sit amet
    </div>
    
    <div class="card" style="margin-bottom: 20px;">
      <div class="form-section-title">
        General
      </div>
      <div>
        <div style="flex: 1 0 auto;">
          <div class="form-group">
            <label for="#">Email</label>
            <input type="name" value="johndoe@reformapp.com">
          </div>
        </div>
      </div>
    </div>
    
    <div class="card">
      <div class="form-section-title">
        Seguridad
      </div>
      <div style="">
        <div class="form-group">
          <label for="#">Contraseña actual</label>
          <input type="password" name="old_password">
        </div>
        <div class="form-group">
          <label for="#">Contraseña  nueva</label>
          <input type="password" name="password">
        </div>
        <div class="form-group">
          <label for="#">Confirmar Contraseña nueva</label>
          <input type="password" name="confirm_password">
        </div>
        <div class="form-group">
          <button type="submit">
            Guardar Cambios
          </button>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection