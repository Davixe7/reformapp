@extends('layouts.app')
@section('content')
<section id="profile">
  <div class="col-lg-6">
    <form action="{{ route('profile.update') }}" method="POST">
      @csrf
      @method('PUT')
      <div class="container-fluid">
        <h1>Mi Perfil</h1>
        
        <div class="alert d-flex align-items-center alert-success">
          <i class="material-icons-outlined" style="margin-right: 10px;">lightbulb</i>
          <div>Describe tu proyecto para que los profesionales indicados puedan verlo</div>
        </div>
        
        <div class="card" style="margin-bottom: 20px;">
          <div class="form-section-title">
            <i class="material-icons-outlined">
              account_circle
            </i>
            Información Básica
          </div>
          <div>
            <div style="display: flex; flex-flow: row wrap;">
              <div class="profile-picture">
              </div>
              <div style="flex: 1 0 auto;">
                <div class="form-group">
                  <label for="#">Nombre</label>
                  <input
                    class="form-control @error('name') is-invalid @enderror"
                    type="name"
                    name="name"
                    value="{{ $profile->name }}">
                  @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="#">Descripción</label>
                  <textarea
                    class="form-control @error('description') is-invalid @enderror"
                    rows="3"
                    name="description"
                    style="max-width: 100%">{{ $profile->description }}</textarea>
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
            <i class="material-icons-outlined">
              perm_contact_calendar
            </i>
            Información de Contacto
          </div>
          <div style="">
            <div style="display: flex;">
              <div class="form-group" style="flex: 1 1 auto; margin-right: 15px;">
                <label for="#">Teléfono</label>
                <input
                  class="form-control @error('phone_1') is-invalid @enderror"
                  type="tel"
                  name="phone_1"
                  value="{{ $profile->phone_1 }}"
                />
                @error('phone_1')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group" style="flex: 1 1 auto;">
                <label for="#">Teléfono 2</label>
                <input
                  class="form-control @error('phone_2') is-invalid @enderror"
                  type="tel"
                  name="phone_2"
                  value="{{ $profile->phone_2 }}"
                />
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
                <input
                  class="form-control @error('email') is-invalid @enderror"
                  type="email"
                  name="email"
                  value="{{ $profile->email }}"
                />
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group" style="flex: 1 1 auto;">
                <label for="#">Sitio Web</label>
                <input
                  class="form-control"
                  type="url"
                  value="https://reformapp.com"
                />
              </div>
            </div>
            <div class="form-group">
              <label for="#">Dirección</label>
              <input
                class="form-control @error('address') is-invalid @enderror"
                type="text"
                name="address"
                value="{{ $profile->address }}"
              />
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
  </div>
</section>
@endsection