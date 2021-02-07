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
            <input type="email" name="email" value="{{ $account->email }}" required>
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
        Seguridad
      </div>
      <div style="">
        <div class="form-group">
          <label for="#">Contraseña actual</label>
          <input class="@error('old_password') is-invalid @enderror" type="password" name="old_password">
          @error('old_password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="#">Contraseña  nueva</label>
          <input class="@error('password') is-invalid @enderror" type="password" name="password">
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-group">
          <label for="#">Confirmar Contraseña nueva</label>
          <input class="@error('confirm_password') is-invalid @enderror" type="password" name="password_confirmation">
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
</section>
@endsection