<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Tuition</title>

    <!--  custom css file  -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="{{ asset('style/responsive.css') }}">


    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


    <!--  ======================= Start Header Area ============================== -->

    <header class="header_area">
        <div class="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light  ">
                <a class="navbar-brand" href="/"><img src="{{ asset('img/logo.png') }}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
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

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main ">


        <!--  ======================= Start Banner Area =======================  -->
        <section class="site-banner overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 site-title">
                        <h3 class="title-text">Hey</h3>
                        <h1 class="title-text text-uppercase">I am Aks</h1>
                        <h4 class="title-text text-uppercase">Senior Wordpress Developer</h4>
                        <div class="site-buttons">
                            <div class="d-flex flex-row flex-wrap">
                                <button type="button" class="btn button primary-button mr-4 text-uppercase">hire
                                    me</button>
                                <button type="button" class="btn button secondary-button text-uppercase">Get cv</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 banner-image">
                        <img src="{{ asset('img/banner/banner-image.png') }}" alt="banner-img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--  ======================= End Banner Area =======================  -->

        <!--  ========================= About Area ==========================  -->

        <section class="about-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-image">
                            <img src="./img/about-us.png" alt="About us" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 about-title">
                        <h2 class="text-uppercase pt-5">
                            <span>Let me</span>
                            <span>introduce</span>
                            <span>myself</span>
                        </h2>
                        <div class="paragraph py-4 w-75">
                            <p class="para">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error rerum iure obcaecati vel
                                possimus officia maiores perferendis ut! Quos, perspiciatis.
                            </p>
                            <p class="para">
                                It is a long established fact that a reader will be distracted by the readable content
                                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here
                            </p>
                        </div>
                        <button type="button" class="btn button primary-button text-uppercase">Download cv</button>
                    </div>
                </div>
            </div>
        </section>

        <!--  ========================= End About Area ==========================  -->

        <!--  ======================== Brand Area ==============================  -->

        <section class="brand-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="first-row row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo1.png" alt="Brand-1 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo2.png" alt="Brand-2 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo3.png" alt="Brand-3 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo4.png" alt="Brand-4">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo5.png" alt="Brand-5 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo6.png" alt="Brand-6">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo7.png" alt="Brand-7 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo8.png" alt="Brand-8 ">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="single-brand">
                                    <img src="./img/brands/logo9.png" alt="Brand-9">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="experience-area">
                            <div class="d-flex flex-row years-area">
                                <h2 class="p-3 years">10</h2>
                                <h2>
                                    <span>Years</span>
                                    <span>Experience</span>
                                    <span>Working</span>
                                </h2>
                            </div>
                            <div class="d-flex flex-row flex-wrap call-area">
                                <span><i class="fas fa-phone-alt fa-3x px-3"></i></span>
                                <div class="call-now">
                                    <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                                    <span class="font-roboto py-2">(+91)-800-555-4986</span>
                                </div>
                            </div>
                            <div class="bg-panel"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  ======================== End Brand Area ==============================  -->





        <!--  ======================== About Me Area ==============================  -->

        <section class="about-area">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <div class="about-title">
                            <h1 class="text-uppercase title-h1">Client Say about me</h1>
                            <p class="para">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, deleniti
                                recusandae. Esse incidunt rem repellendus ab voluptates maxime? Nemo, numquam!
                            </p>
                        </div>
                    </div>
                </div>
            </div>



        </section>

        <!--  ======================== End About Me Area ==============================  -->

        <!--  ========================== Subscribe me Area ============================  -->
        <section class="subscribe-us-area">
            <div class="container subscribe">
                <div class="row">
                    <div class="col-lg-12 text-center subscribe-title">
                        <h4 class="text-uppercase">Get Update From anywhere</h4>
                        <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam,
                            consequuntur.</p>
                    </div>
                </div>
                <div class="d-sm-flex justify-content-center">
                    <form class="w-50">
                        <div class="row d-flex flex-row flex-wrap">
                            <div class="col input-textbox">
                                <input type="text" id="txtemail" class="form-control" placeholder="Email">
                            </div>
                            <div class="col">
                                <div class="btn-submit">
                                    <button type="submit" class="btn btn-success float-right">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!--  ========================== End Subscribe me Area ============================  -->


    </main>
    <!--  ======================= End Main Area ================================ -->

    <footer class="footer-area">
        <div class="container">
            <div class="">
                <div class="site-logo text-center py-4">
                    <a href="#"><img src="./img/logo.png" alt="logo"></a>
                </div>
                <div class="social text-center">
                    <h5 class="text-uppercase">Follow me</h5>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
                <div class="copyrights text-center">
                    <p class="para">
                        Copyright ©2019 All rights reserved | This template is made with by
                        <a href="#"><span style="color: var(--primary-color);">Daily Tuition</span></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


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

    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
