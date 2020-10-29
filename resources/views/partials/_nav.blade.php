<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Laracarte</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
          <li class="nav-item ">
          <a class="nav-link {{ set_active_route('home') }}" aria-current="page" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
          <a class="nav-link {{ set_active_route('pages.about') }}" href="{{ route('pages.about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Artisans</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
              Planet
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="https://laravel.com">Laravel.com</a></li>
              <li><a class="dropdown-item" href="https://laravel.io">Laravel.io</a></li>
              <li><a class="dropdown-item" href="https://laracasts.com">Laracasts</a></li>
              <li><a class="dropdown-item" href="https://laradjobs.com">Laradjobs</a></li>
              <li><a class="dropdown-item" href="https://laravel-new.com">Laravel news</a></li>
              {{-- <li><hr class="dropdown-divider"></li> --}}
              <li><a class="dropdown-item" href="https://larachat.com">Larachat</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Login</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Register</a></li>
        </ul>
        <form class="d-flex">
          <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
