@extends('layouts.app')

@section('content')
    <section class="site-banner overflow-hidden mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 site-title " data-aos="fade-up"
                data-aos-duration="1000">
                    <h3 class="title-text">WE ARE ITM</h3>
                    <p>ITM is a website where you can find information about programming, here you can also follow the existing material to create a website, and you can read various kinds of material or information that we have created, or if you want to provide material you can add it yourself. to share the information you have</p>

                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <button type="button" class="btn button primary-button mr-4 text-uppercase">Read More</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 banner-image " data-aos="fade-down"
                data-aos-duration="1000">
                    <img src="{{ asset('img/marketing/Scenes/Scenes01.svg') }}" alt="banner-img" class="img-fluid">

                </div>
            </div>
        </div>
    </section>

    <section class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="500">
                        <img src="{{ asset('img/marketing/Scenes/Scenes08.svg') }}" alt="About us" class="img-fluid" style="width: 650px;" >
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 about-title">
                    <h2 class="text-uppercase pt-5" data-aos="fade-up"
                    data-aos-easing="linear"
                    data-aos-duration="500">
                        <span>Our</span>
                        <span>Background</span>
                    </h2>
                    <div class="paragraph py-4 w-75" data-aos="fade-up"
                    data-aos-easing="linear"
                    data-aos-duration="500"
                    data-aos-delay="100">
                        <p class="text-sm " style="font-weight: 500">
                            The background of the creation of this website is to provide information to students or the public who want to know about programming and want to learn it, here we provide basic information about programming for beginners who want to learn programming from the very bottom, and we also want to share knowledge so that our knowledge is not in vain and so that it can be conveyed to all people
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visimisi-area">
        <div class="container-fluid p-5">
            <div class="row justify-content-evenly">
                <div class="col-lg-4 text-center align-items-center" data-aos="fade-down-right"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="100">
                    <h3 class="mt-lg-5 mb-lg-5">Vision</h3>
                    <h5 class="mb-lg-3" style="letter-spacing: 1px">Shaping the future and humanity through technology</h5>
                    <p class="">We understand Technology is an important part of our society and will deliver us to a brighter future. But in the meantime, we also realized human is the most crucial part to encourage technology and make a brighter future for the world.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="about-image " data-aos="zoom-in"
                    data-aos-easing="linear"
                    data-aos-duration="500"
                    data-aos-delay="100">

                        <img src="{{ asset('img/marketing/Elements/Elements02.svg') }}" style="width: 350px" class="img-fluid " alt="">
                    </div>
                </div>
                <div class="col-lg-4 text-center" data-aos="fade-down-left"
                data-aos-easing="linear"
                data-aos-duration="500"
                data-aos-delay="100">
                    <h3 class="mt-lg-5 mb-lg-5">Mision</h3>
                    <div class="row jistify-content-between">
                        <div class="col-lg-4">
                            <i class="bi bi-code fs-1"></i>
                            <p>Web Development</p>
                        </div>
                        <div class="col-lg-4">
                            <i class="bi bi-code fs-1"></i>
                            <p>Web Development</p>
                        </div>
                        <div class="col-lg-4">
                            <i class="bi bi-code fs-1"></i>
                            <p>Web Development</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
