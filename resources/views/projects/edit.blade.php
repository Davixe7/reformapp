@extends('layouts.app')
@section('content')
<section id="profile" style="width: 50%;">
<form action="{{ route('projects.update', ['project'=>$project->id]) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="container">
    <h1>Actualizar Proyecto</h1>
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
            <input type="name" name="name" value="{{ $project->name }}">
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
          <textarea name="description" rows="5" style="max-width: 100%">{{ $project->description }}</textarea>
        </div>
        <div style="display: flex; flex-flow: row; justify-content: space-between;">
          <div class="form-group" style="margin-right: 20px;">
            <label for="#">Fecha Limite</label>
            <input type="date" name="due_date" value="{{ \Carbon\Carbon::parse($project->due_date)->format('Y-m-d') }}">
          </div>
          <div class="form-group" style="margin-right: 20px;">
            <label for="#">Presupuesto</label>
            <input type="number" name="budget" value="{{ $project->budget }}">
          </div>
          <div class="form-group">
            <label for="" style="color: #fff;">Enviar</label>
            <button type="submit">
              Actualizar Proyecto
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
</section>
@endsection