@extends('layouts.app')
@section('content')
<section id="profile" style="width: 50%;">
<form action="{{ route('projects.store') }}" method="POST">
  @csrf
  <div class="container">
    <h1>Crear Proyecto</h1>
    <div class="card" style="margin-bottom: 20px;">
      Lorem ipsum dolor sit amet
    </div>
    
    <div class="card" style="margin-bottom: 20px;">
      <div class="form-section-title">
        Información Básica
      </div>
      <div>
        <div style="display: flex; flex-flow: row wrap;">
          <div class="form-group" style="flex: 1 0 auto; margin-right: 20px;">
            <label for="#">Nombre</label>
            <input type="name" name="name">
          </div>
          <div class="form-group" style="flex: 1 0 30%;">
            <label for="#">Categoría</label>
            <select name="" id="" name="category" value="">
              <option value="#">Seleccionar Categoría</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="#">Descripción</label>
          <textarea name="description" id="" rows="5" style="max-width: 100%"></textarea>
        </div>
        <div style="display: flex; flex-flow: row; justify-content: space-between;">
          <div class="form-group" style="margin-right: 20px;">
            <label for="#">Fecha Limite</label>
            <input type="date" name="due_date">
          </div>
          <div class="form-group" style="margin-right: 20px;">
            <label for="#">Presupuesto</label>
            <input type="number" name="budget">
          </div>
          <div class="form-group">
            <label for="" style="color: #fff;">Enviar</label>
            <button type="submit">
              Publicar Proyecto
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
@endsection