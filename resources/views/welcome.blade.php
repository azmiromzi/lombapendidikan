<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    {{-- mystyle css --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">


    <title>Home Page</title>
  </head>
  <body>




    <nav class="navbar navbar-expand-lg navbar-dark color-navbar">
        <div class="container-fluid ">
            <a class="navbar-brand d-flex m-0 align-items-center p-0" href="#" >
                <img src="{{ asset('image/logo.png') }}" alt="" width="50" height="44" class="d-inline-block align-text-top ">
               <p class="text-wrap p-0 text-center logo-text " >Information and Technology
                Material</p>
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item mt-2 mt-xl-0">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category Material
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item pe-xl-4 border-login">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item ps-xl-4">
                <a class="nav-link" href="#">Login</a>
              </li>

            </ul>
          </div>
        </div>
      </nav>

      <div class="container mt-4">
        <img src="{{ asset('image/image-welcome1.png') }}" class="img-fluid" alt="...">
      </div>

      <div class="container mt-4">
        <h3 class="text-capitalize fw-bolder color-subjudul">
            some basic material
        </h3>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card width-card mt-3 mt-xl-0 box-shadow" >
                    <img src="{{ asset('image/html.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="oval"></div>
                        <p class="card-stemple fw-bolder text-capitalize">recomended</p>
                      <a href="#" class="card-title color-subjudul fw-bolder fs-4 text-decoration-none  d-block distance"  >Basic HTML</a>
                      <p class="card-text distance ms-2 text-secondary">here is a place to find material about IT</p>
                      <div class="d-flex justify-content-end distance">
                          <p class="fw-bolder">209 preview</p>
                          <a href="#" class="text-decoration-none ms-2">
                            <i class="bi bi-chat-left-dots-fill fs-5 text-dark"></i>
                          </a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card width-card mt-3 mt-xl-0 box-shadow" >
                    <img src="{{ asset('image/html.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="oval"></div>
                        <p class="card-stemple fw-bolder text-capitalize">recomended</p>
                      <a href="#" class="card-title color-subjudul fw-bolder fs-4 text-decoration-none  d-block distance"  >Basic HTML</a>
                      <p class="card-text distance ms-2 text-secondary">here is a place to find material about IT</p>
                      <div class="d-flex justify-content-end distance">
                          <p class="fw-bolder">209 preview</p>
                          <a href="#" class="text-decoration-none ms-2">
                            <i class="bi bi-chat-left-dots-fill fs-5 text-dark"></i>
                          </a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card width-card mt-3 mt-xl-0 box-shadow" >
                    <img src="{{ asset('image/html.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="oval"></div>
                        <p class="card-stemple fw-bolder text-capitalize">recomended</p>
                      <a href="#" class="card-title color-subjudul fw-bolder fs-4 text-decoration-none  d-block distance"  >Basic HTML</a>
                      <p class="card-text distance ms-2 text-secondary">here is a place to find material about IT</p>
                      <div class="d-flex justify-content-end distance">
                          <p class="fw-bolder">209 preview</p>
                          <a href="#" class="text-decoration-none ms-2">
                            <i class="bi bi-chat-left-dots-fill fs-5 text-dark"></i>
                          </a>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card width-card mt-3 mt-xl-0 box-shadow" >
                    <img src="{{ asset('image/html.png') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="oval"></div>
                        <p class="card-stemple fw-bolder text-capitalize">recomended</p>
                      <a href="#" class="card-title color-subjudul fw-bolder fs-4 text-decoration-none  d-block distance"  >Basic HTML</a>
                      <p class="card-text distance ms-2 text-secondary">here is a place to find material about IT</p>
                      <div class="d-flex justify-content-end distance">
                          <p class="fw-bolder">209 preview</p>
                          <a href="#" class="text-decoration-none ms-2">
                            <i class="bi bi-chat-left-dots-fill fs-5 text-dark"></i>
                          </a>
                      </div>
                    </div>
                  </div>
            </div>

        </div>
      </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
