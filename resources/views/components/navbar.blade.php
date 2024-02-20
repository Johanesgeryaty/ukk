<nav class="navbar navbar-expand-lg bg-primary navbar-dark py-3">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">N5 Galeri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav me-auto">
                {{-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Features</a>
                <a class="nav-link" href="#">Pricing</a>
                <a class="nav-link disabled" aria-disabled="true">Disabled</a> --}}
            </div>
            @if (Auth::user())
            <div class="dropdown">
              <a class="btn btn-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->nama }}
              </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route ('photo.post') }}">POST</a></li>
                  <li><a class="dropdown-item" href="{{ route ('profile.index') }}">Profile</a></li>
                  <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                </ul>
              </div>
              @else
              <div><a href="{{ route('login.index') }}" class="btn btn-info text-white">Login</a></div>
              @endif
        </div>
    </div>
</nav>
