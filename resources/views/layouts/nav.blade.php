 <!--  ======================= Start Header Area ============================== -->

 <header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <a class="navbar-brand" href="/"><img src="./img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('article.index') }}">Knowledge IT</a>
                    </li>
                    @if(auth()->user())

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Profile</a>
                    </li>
                    @else

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>

<!--  ======================= End Header Area ============================== -->
