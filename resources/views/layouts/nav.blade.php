 <!--  ======================= Start Header Area ============================== -->

 <header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <a class="navbar-brand" href="/"><img src=" {{ asset('img/logo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav  mx-auto">
                    <li class="nav-item {{ Route::is('welcome') ? 'active' : '' }}">
                        <a class="nav-link " href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item {{ Route::is('article.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('article.index') }}">Knowledge IT</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">

                    @if(auth()->user())

                    {{-- <li class="nav-item border">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="nav-link btn" href="logout">Logout</button>
                        </form>
                    </li>
                    <li class="nav-item border">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('image/logo.png') }}" alt="Avatar Logo" style="width:40px;" class="rounded-pill">
                          </a>
                    </li> --}}

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbar-list-4">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <a class="dropdown-item" href="{{ route('user.edit', auth()->user()->id) }}">Edit Profile</a>
                              <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                            </div>
                          </li>
                        </ul>
                      </div>

                    @else

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--  ======================= End Header Area ============================== -->
