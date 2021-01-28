@extends('layouts.home')
@section('content')

@foreach($data as $key)


  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{ $key['image'] }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $key['first_name'] . " " . $key['last_name']}}</h5>
      <p class="card-text">{{ $key['email'] }}  '<br>'  {{ $key['gender'] }}</p>
      <a href="/utente/{{ $key['id'] }}">Dettagli</a>
    </div>
  </div>



@endforeach

@endsection
