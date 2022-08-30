<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>

    <section class="vh-100 py-5" >
        <div class="container h-100 py-5" >
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
            <div class="card text-black shadow" >
            <div class="card-body p-md-5 ">
                <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                    <form class="mx-1 mx-md-4" action="{{ route('register') }}" method="POST">
                        @csrf

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" name="name" class="form-control" @error('name')
                        is-invalid
                        @enderror" required autofocus/>
                        <label class="form-label" for="form3Example1c">Your Name</label>
                        @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                        <input type="email" name="email" id="form3Example3c" class="form-control " @error('email')
                        is-invalid
                        @enderror" required autofocus />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                        @error('email')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password" id="form3Example4c" class="form-control" @error('password')
                        is-invalid
                        @enderror" required autofocus/>
                        <label class="form-label" for="form3Example4c">Password</label>
                        @error('password')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-row align-items-center ">
                        <div class="form-outline flex-fill mb-0">
                        <input type="password" name="password_confirmation" id="form3Example4cd" class="form-control" @error('password_confirmation')
                        is-invalid
                        @enderror" required autofocus/>
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                        @error('password_confirmation')
                            <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>

                    <div class="d-flex justify-content-end mb-5">
                        <a href="{{ route('login') }}">You Have An Account?</a>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <button type="submit" class="btn button primary-button mr-4 text-uppercase">Register</button>
                    </div>

                    </form>

                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                   @include('image.svg2')
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


  </body>
</html>
