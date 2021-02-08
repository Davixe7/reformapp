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
        <i class="material-icons-outlined">
          edit
        </i>
        Información Básica
      </div>
      <div>
        <div style="display: flex; flex-flow: row wrap;">
          <div class="form-group" style="flex: 1 0 auto; margin-right: 20px;">
            <label for="#">Nombre</label>
            <input class="@error('name') is-invalid @enderror" type="name" name="name" value="{{ $project->name }}" required>
            @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group" style="flex: 1 0 30%;">
            <label for="#">Categoría</label>
            <select class="@error('category_id') is-invalid @enderror" name="category_id" value="{{$project->category_id}}" required>
              <option value="#">Seleccionar Categoría</option>
              @foreach( $categories as $category )
                <option value="{{$category->id}}" @if($project->category_id) selected @endif>
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
          <textarea class="@error('description') is-invalid @enderror" name="description" rows="5" required>{{ $project->description }}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div style="display: flex; flex-flow: row; justify-content: space-between;">
          <div class="form-group" style="margin-right: 20px;">
            <label for="#">Fecha Limite</label>
            <input class="@error('due_date') is-invalid @enderror" type="date" name="due_date" value="{{ \Carbon\Carbon::parse($project->due_date)->format('Y-m-d') }}">
            @error('due_date')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group" style="margin-right: 20px;">
            <label for="#">Presupuesto</label>
            <input class="@error('budget') is-invalid @enderror" type="number" name="budget" value="{{ $project->budget }}">
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