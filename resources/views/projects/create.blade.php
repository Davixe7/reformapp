@extends('layouts.app')
@section('content')
<section id="profile">
<div class="col-lg-6">
  <form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <div class="container-fluid">
      <h1>Crear Proyecto</h1>
      <div class="alert d-flex align-items-center alert-success">
        <i class="material-icons-outlined" style="margin-right: 10px;">lightbulb</i>
        <div>Describe tu proyecto para que los profesionales indicados puedan verlo</div>
      </div>
      
      <div class="card" style="margin-bottom: 20px;">
        <div class="form-section-title">
          <i class="material-icons-outlined">edit</i>
          Información Básica
        </div>
        <div>
          <div class="row">
            <div class="form-group col">
              <label for="#">Nombre</label>
              <input class="form-control @error('name') is-invalid @enderror" type="name" name="name" required>
              @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group col-4">
              <label for="#">Categoría</label>
              <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" required>
                @foreach( $categories as $category )
                  <option value="{{$category->id}}">
                    {{ $category->name }}
                  </option>
                @endforeach
              </select>
              @error('category_id')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
          </div>
          <div class="form-group">
            <label for="#">Descripción</label>
            <textarea
              class="form-control @error('description') is-invalid @enderror"
              name="description" id="" rows="5" style="max-width: 100%" required></textarea>
            @error('description')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div style="display: flex; flex-flow: row; justify-content: space-between;">
            <div class="form-group" style="margin-right: 20px;">
              <label for="#">Fecha Limite</label>
              <input class="form-control @error('due_date') is-invalid @enderror" type="date" name="due_date">
              @error('due_date')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group" style="margin-right: 20px;">
              <label for="#">Presupuesto</label>
              <input class="form-control @error('budget') is-invalid @enderror" type="number" name="budget">
              @error('budget')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="" style="color: #fff;">
                Enviar
              </label>
              <button type="submit">
                Publicar Proyecto
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
</section>
@endsection