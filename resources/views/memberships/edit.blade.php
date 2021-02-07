@extends('layouts.app')
@section('content')
<section id="profile" style="width: 50%;">
  <div class="container">
    <h1>Membresia</h1>
    <div class="card" style="margin-bottom: 20px;">
      Lorem ipsum dolor sit amet
    </div>
    
    <div class="card" style="margin-bottom: 20px;">
      <div class="form-section-title">
        Plan Actual
      </div>
      @if( $subscription = auth()->user()->subscriptions()->where('expired_at', null)->first() )
        <div>
          <div style="display: flex;">
            <div class="form-group" style="flex: 1 1 auto; margin-right: 20px;">
              <label for="#">Nombre del Plan</label>
              <input type="text" value="{{ $subscription->name }}">
            </div>
            <div class="form-group" style="flex: 1 1 auto; margin-right: 20px;">
              <label for="#">Vence el</label>
              <input type="text" value="{{ $subscription->pivot->expires_at }}">
            </div>
            <div class="form-group" style="flex: 1 0 auto; text-align: center;">
              <label for="#">Días Restantes</label>
              <input type="text" value="{{ \Carbon\Carbon::now()->diffInDays($subscription->pivot->expires_at ) }}" style="text-align: center;">
            </div>
          </div>
        </div>
      @else
      @endif
    </div>
    
    <div class="card">
      <div class="form-section-title">
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
</section>
@endsection