<header>
<div class="container-header">
  <div class="col-xs-3 container-logo">
    <img class='logo'src="img/logo.png" alt="Logo">
  </div>
  <div class="col-xs-9 container-list">
    <ul>
      @foreach(config('routes.routes') as $key)
      <a href="{{ $key['id'] }}"><li>{{ $key['view'] }}</li></a>
      @endforeach
      <button type="button" name="button">Candidati Ora</button>
    </ul>
  </div>
</div>
</header>
