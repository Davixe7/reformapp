@extends('layouts.app')
@section('content')
<section id="profile">
  <div class="container-fluid">
    <div class="col-lg-6">
      <h1>Membresía</h1>
      
      <div class="alert d-flex align-items-center alert-success">
        <i class="material-icons-outlined" style="margin-right: 10px;">lightbulb</i>
        <div>Describe tu proyecto para que los profesionales indicados puedan verlo</div>
      </div>
      
      <div class="card" style="margin-bottom: 20px;">
        <div class="form-section-title">
          <i class="material-icons-outlined">badge</i>
          Plan Actual
        </div>
        @if( $subscription = auth()->user()->subscriptions()->where('expired_at', null)->first() )
          <div>
            <div style="display: flex;">
              <div class="form-group" style="flex: 1 1 auto; margin-right: 20px;">
                <label for="#">Nombre del Plan</label>
                <input class="form-control" type="text" value="{{ $subscription->name }}">
              </div>
              <div class="form-group" style="flex: 1 1 auto; margin-right: 20px;">
                <label for="#">Vence el</label>
                <input class="form-control" type="text" value="{{ $subscription->pivot->expires_at }}">
              </div>
              <div class="form-group" style="flex: 1 0 auto; text-align: center;">
                <label for="#">Días Restantes</label>
                <input class="form-control" type="text" value="{{ \Carbon\Carbon::now()->diffInDays($subscription->pivot->expires_at ) }}" style="text-align: center;">
              </div>
            </div>
          </div>
        @else
        @endif
      </div>
      
      <div class="card">
        <div class="form-section-title">
          <i class="material-icons">history</i>
          Historial
        </div>
        <div style="">
          <table>
            <thead>
              <th>Membresía</th>
              <th>Suscrito el</th>
              <th>Venció el</th>
            </thead>
            <tbody>
              @foreach( auth()->user()->subscriptions as $subscription )
              <tr>
                <td>{{ $subscription->name }}</td>
                <td>{{ $subscription->pivot->subscribed_at }}</td>
                <td>{{ $subscription->pivot->expired_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection