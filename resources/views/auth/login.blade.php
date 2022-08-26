<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>

    <section class="vh-100" >
        <div class="container h-100" >
        <div class="row d-flex justify-content-center align-items-center h-100" style="flex-direction: column-reverse">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black border-0" style="border-radius: 25px; box-shadow: 20px 20px; height: 110%">
            <div class="card-body p-md-5 ">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-6 d-flex align-items-center ">
                        <img src="https://assets-global.website-files.com/5bcb5ee81fb2091a2ec550c7/5dedd7b85049677d981db611_5c65f4ae2f71d67d0ee9f032_hero-image.png"
                        class="img-fluid" alt="Sample image">
                        <img>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-5 order-2 order-lg-1">

                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Login</p>

                        <form class="mx-1 mx-md-4" method="POST" action="{{ route('login') }}">
                            @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="email" id="form3Example3c" name="email" class="form-control" />
                            <label class="form-label" for="form3Example3c">Your Email</label>
                            </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                            <div class="form-outline flex-fill mb-0">
                            <input type="password" name="password" id="form3Example4c" class="form-control" />
                            <label class="form-label" for="form3Example4c">Password</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <button type="submit" class="btn button primary-button mr-4 text-uppercase">Login</button>
                        </div>

                        </form>

                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!--  Jquery js file  -->
    <script src="{{ asset('js/jquery.3.4.1.js') }}"></script>

     <!--  custom js file  -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>let nav_offset_top = $('.header_area').height() + 50;

    function navbarFixed() {
        if ($('.header_area').length) {
            $(window).scroll(function () {
                let scroll = $(window).scrollTop();
                if (scroll >= nav_offset_top) {
                    $('.header_area .main-menu').addClass('navbar_fixed');
                } else {
                    $('.header_area .main-menu').removeClass('navbar_fixed');
                }
            })
        }
    }

    navbarFixed();</script>

  </body>
</html>

