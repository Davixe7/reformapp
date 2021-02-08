@extends('layouts.app')
@section('content')
<section id="jobs">
  <div class="container">
    <h1>Explorar Proyectos</h1>
    <div class="search-box">
      <form action="{{ route('projects.index') }}" method="get">
        <input type="search" name="name" placeholder="Nombre o Descripción del Proyecto">
        <select name="category_id">
          <option value="">
            Seleccionar categoría
          </option>
          @foreach( $categories as $category )
            <option value="{{$category->id}}">
              {{ $category->name }}
            </option>
          @endforeach
        </select>
        <button type="submit">
          buscar
        </button>
      </form>
    </div>
    <div class="col-lg-6">
      @if( $projects->count() )
      <div class="help-text">
        <div>
          Resultados de la búsqueda
        </div>
        <div>
          Monstrando {{ $projects->count() }} total
        </div>
      </div>
      <ul class="jobs-results-list">
        @foreach( $projects as $project )
        <li class="card">
          <div class="avatar">
            <i class="material-icons">
              {{ $project->category->icon_name }}
            </i>
          </div>
          <div class="content">
            <div style="display: flex;">
              <h2>{{ $project->name }}</h2>
              <div class="published-at" style="margin-left: auto;">
                {{ $project->created_at }}
              </div>
            </div>
            <div class="excerpt">{{ $project->description }}</div>
          </div>
        </li>
        @endforeach
      </ul>
      @else
      <div class="card" style="display: flex; align-items: center;">
        <i class="material-icons" style="margin-right: 15px;">
          sentiment_neutral
        </i>
        No hay resultados disponibles
      </div>
      @endif
    </div>
  </div>
</section>
@endsection