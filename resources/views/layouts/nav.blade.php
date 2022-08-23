<nav class="navbar navbar-expand-lg bg-white fixed-top">
    <div class="container ">
        <a class="navbar-brand d-flex m-0  p-0" href="#" style="font-family: 'Open Sans', sans-serif; font-size: 2rem">IT Material </a>
          {{-- <img src="{{ asset('image/logo.png') }}" alt="" width="50" height="44" class="d-inline-block align-text-top "> --}}
          {{-- <p class="text-wrap  text-center " >IT Material</p> --}}
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bi bi-list"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">
        
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Learning Path
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Laravel</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>

              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item pe-xl-4 border-login">
            <a class="nav-link" href="#">About Us</a>
          </li>
         

        </ul>
        <ul class="navbar-nav ms-auto">
           <li class="nav-item ps-xl-4">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          <li class="nav-item ps-xl-4">
            <a class="nav-link" href="{{ route('login') }}">Login</a>
          </li>
        </ul>
      </div>
    </div>
</nav>