<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lomba Pendidikan</title>

    {{-- trix css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('style/trix.css') }}">
    <script type="text/javascript" src="{{ asset('js/trix.js') }}"></script>

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


    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- cdn bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    {{-- profile css --}}

    <link rel="stylesheet" href="{{ asset('style/profile.css') }}">

</head>

<body>


   @include('nav')

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



    {{-- bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- AOS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    {{-- trix js --}}
    <script>
        AOS.init();
    </script>
</body>

</html>
