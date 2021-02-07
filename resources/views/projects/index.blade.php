@extends('layouts.app')
@section('content')
<section id="jobs">
  <div class="container">
    <h1>Explorar Proyectos</h1>
    <div class="search-box">
      <input type="search" placeholder="Nombre o Descripción del Proyecto">
      <select name="" id="">
        <option value="">Seleccionar categoría</option>
      </select>
      <button>avanzado</button>
    </div>
    @if( $projects->count() )
    <ul class="jobs-results-list">
      @foreach( $projects as $project )
      <li>
        <div class="employer-avatar"></div>
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
    @endif
  </div>
</section>
@endsection