<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daily Tuition</title>

    {{-- navigation css --}}
    <link rel="stylesheet" href="{{ asset('style/home/nav.css') }}">

    {{-- banner home css --}}
    <link rel="stylesheet" href="{{ asset('style/home/banner.css') }}">

    {{-- about home css --}}
    <link rel="stylesheet" href="{{ asset('style/home/about.css') }}">

    {{-- brand home css --}}
    <link rel="stylesheet" href="{{ asset('style/home/brand.css') }}">

    <!--  custom css file  -->
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <!--  Responsive css file  -->
    <link rel="stylesheet" href="{{ asset('style/responsive.css') }}">



    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- cdn bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>


   @include('layouts.nav')

    <!--  ======================= Start Main Area ================================ -->
    <main class="site-main ">


       @yield('content')


    </main>
    <!--  ======================= End Main Area ================================ -->

    @include('components.footer')


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
