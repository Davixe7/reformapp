@extends('layouts.app')
@section('content')
<section id="profile">
  <div class="container-fluid">
    <div class="col-lg-6">
      <h1>
        Mi Cuenta
      </h1>
      
      <div class="alert d-flex align-items-center alert-success">
        <i class="material-icons-outlined" style="margin-right: 10px;">lightbulb</i>
        <div>Describe tu proyecto para que los profesionales indicados puedan verlo</div>
      </div>
      
      <div class="card" style="margin-bottom: 20px;">
        <div class="form-section-title">
          <i class="material-icons-outlined">edit</i> General
        </div>
        <div>
          <div style="flex: 1 0 auto;">
            <div class="form-group">
              <label for="#">Email</label>
              <input class="form-control" type="email" name="email" value="{{ $account->email }}" required>
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="form-section-title">
          <i class="material-icons material-icons-outline">lock_open</i>
          Seguridad
        </div>
        <div style="">
          <div class="form-group">
            <label for="#">Contraseña actual</label>
            <input class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password">
            @error('old_password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="#">Contraseña  nueva</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="#">Confirmar Contraseña nueva</label>
            <input class="form-control @error('confirm_password') is-invalid @enderror" type="password" name="password_confirmation">
            @error('confirm_password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit">
              Guardar Cambios
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection