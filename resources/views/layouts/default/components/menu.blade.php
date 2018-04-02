<nav class="navbar navbar-expand-lg navbar-light pf-nav">
  <a class="navbar-brand" href="#">
    <img src="/img/logo-portal-formosa.svg" alt="Logo do Portal Formosa" width="40"> Portal Formosa
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dashboards
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/dashboards/admin">Administrador</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
      @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
          <a href="{{ route('login') }}" class="btn btn-outline-success">Login</a>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href="{{ route('register') }}" class="btn btn-outline-success">Registrar</a>
          @endauth
    </div>
  </div>
</nav>