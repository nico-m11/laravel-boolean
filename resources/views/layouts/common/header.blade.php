<header>
<div class="container-header">
  <div class="col-xs-3 container-logo">
    <img class='logo'src="{{ asset('img/logo.png') }}" alt="Logo">
  </div>
  <div class="col-xs-9 container-list">
    <ul>
      @foreach(config('routes.routes') as $key)
      <li class="{{ Route::currentRouteName() == $key['id'] ? 'active' : '' }}">
      <a href="{{ $key['id'] }}">{{ $key['view'] }}</a>
      </li>
      @endforeach
      <button type="button" class="btn btn-outline-success">Candidati Ora</button>
    </ul>
  </div>
</div>
</header>
