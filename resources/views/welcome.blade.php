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

    {{-- font --}}
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">


    {{-- mystyle css --}}
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <title>Home Page</title>
  </head>
  <body>
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

     
       

      

    <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>My Social Media : </span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="#" class="me-4">
            <i class="bi bi-facebook"></i>
        </a>
        <a href="#" class="me-4">
            <i class="bi bi-twitter"></i>
        </a>
        <a href="#" class="me-4">
            <i class="bi bi-google"></i>
        </a>
        <a href="#" class="me-4">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="#" class="me-4">
            <i class="bi bi-linkedin"></i>
        </a>
        <a href="#" class="me-4">
            <i class="bi bi-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4 ">
                <i class="bi bi-code-slash me-1 fs-5"></i>ITM COMPANY
            </h6>
            <p class="text-uppercase">
              THIS IS MY BLACK COMPANY, you can buy girls for cheap, you can buy drugs, and you can also gamble risking it all here
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Angular</a>
            </p>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">React</a>
            </p>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Vue</a>
            </p>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Pricing</a>
            </p>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Settings</a>
            </p>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Orders</a>
            </p>
            <p>
              <a href="#!" class="link-secondary text-decoration-none ">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="bi bi-house-fill me-3"></i>Jakarta Timur, SMKN 46 JAKARTA</p>
            <p>
              <i class="bi bi-envelope me-3 "></i>
              azmiromzihoesaini@gmail.com
            </p>
            <p><i class="bi bi-telephone me-3"></i>08990113750</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
      © 2022 Copyright:
      <a class="text-decoration-none text-secondary fw-bold" href="https://www.instagram.com/romzi_azmi/">The Black Company</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src=""></script>

  </body>
</html>
