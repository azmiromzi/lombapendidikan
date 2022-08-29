 <!--  ======================= Start Header Area ============================== -->

 <header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <a class="navbar-brand" href="/"><img src="./img/logo.png" alt="logo"></a>
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

                    <li class="nav-item ">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="nav-link btn" href="logout">Logout</button>
                        </form>
                    </li>
                    @else

                    <li class="nav-item {{ Route::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item {{ Route::is('register') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--  ======================= End Header Area ============================== -->
