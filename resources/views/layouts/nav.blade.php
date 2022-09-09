 <!--  ======================= Start Header Area ============================== -->

 <header class="header_area">
    <div class="main-menu">
        <nav class="navbar navbar-expand-lg navbar-light  ">
            <a class="navbar-brand" href="/"><img width="100px" class="img-fluid" src=" {{ asset('img/lgo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav  mx-auto">
                     @if(auth()->user()->level === 0)


                     <li class="nav-item {{ Route::is('welcome') ? 'active' : '' }}">
                         <a class="nav-link " href="{{ route('welcome') }}">Home</a>
                     </li>
                     <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                         <a class="nav-link" href="{{ route('about') }}">About Us</a>
                     </li>
                    @endif
                    <li class="nav-item {{ Route::is('article.index') || Route::is('article.create') || Route::is('article.show') || Route::is('article.edit')  ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('article.index') }}">Knowledge IT</a>
                    </li>
                    <li class="nav-item {{ Route::is('category.index')  ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">Category</a>
                    </li>
                    @if(auth()->user()->level === 1)

                    <li class="nav-item {{ Route::is('user.index') || Route::is('user.create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">Admin</a>
                    </li>

                    <li class="nav-item {{ Route::is('article.admin') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('article.admin') }}">Article</a>
                    </li>
                    @endif


                </ul>
                <ul class="navbar-nav ms-auto">

                    @if(auth()->user())


                    {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-4" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button> --}}

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
