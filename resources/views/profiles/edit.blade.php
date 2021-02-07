@extends('layouts.app')
@section('content')
<section id="profile" style="width: 50%;">
  <form action="{{ route('profile.update') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="container">
      <h1>Mi Perfil</h1>
      <div class="card" style="margin-bottom: 20px;">
        Lorem ipsum dolor sit amet
      </div>
      <div class="card" style="margin-bottom: 20px;">
        <div class="form-section-title">
          Información Básica
        </div>
        <div>
          <div style="display: flex; flex-flow: row wrap;">
            <div class="profile-picture">
            </div>
            <div style="flex: 1 0 auto;">
              <div class="form-group">
                <label for="#">Nombre</label>
                <input class="@error('name') is-invalid @enderror" type="name" name="name" value="{{ $profile->name }}">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group">
                <label for="#">Descripción</label>
                <textarea class="@error('description') is-invalid @enderror" name="description" id="" rows="3" style="max-width: 100%">{{ $profile->description }}</textarea>
                @error('descripción')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="form-section-title">
          Información de Contacto
        </div>
        <div style="">
          <div style="display: flex;">
            <div class="form-group" style="flex: 1 1 auto; margin-right: 15px;">
              <label for="#">Teléfono</label>
              <input class="@error('phone_1') is-invalid @enderror" type="tel" name="phone_1" value="{{ $profile->phone_1 }}">
              @error('phone_1')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group" style="flex: 1 1 auto;">
              <label for="#">Teléfono 2</label>
              <input class="@error('phone_2') is-invalid @enderror" type="tel" name="phone_2" value="{{ $profile->phone_2 }}">
              @error('phone_2')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div style="display: flex;">
            <div class="form-group" style="flex: 1 1 auto; margin-right: 15px;">
              <label for="#">Email</label>
              <input class="@error('email') is-invalid @enderror" type="email" name="email" value="{{ $profile->email }}">
              @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group" style="flex: 1 1 auto;">
              <label for="#">Sitio Web</label>
              <input type="url" value="https://reformapp.com">
            </div>
          </div>
          <div class="form-group">
            <label for="#">Dirección</label>
            <input class="@error('address') is-invalid @enderror" type="text" name="address" value="{{ $profile->address }}">
            @error('address')
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
  </form>
</section>
@endsection