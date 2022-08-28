@extends('layouts.app')

@section('content')
    <section class="site-banner overflow-hidden mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 site-title">
                    <h3 class="title-text">WE ARE ITM</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore omnis debitis exercitationem dicta nemo harum  </p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. E Lorem ipsum dolor sit amet.</p>

                    <h6 class="mb-4">Best Learning Center</h6>
                    <div class="site-buttons">
                        <div class="d-flex flex-row flex-wrap">
                            <button type="button" class="btn button primary-button mr-4 text-uppercase">Read More</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 banner-image">
                    <img src="{{ asset('img/marketing/Scenes/Scenes01.svg') }}" alt="banner-img" class="img-fluid">

                </div>
            </div>
        </div>
    </section>

    <section class="about-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about-image">
                        <img src="{{ asset('img/marketing/Scenes/Scenes08.svg') }}" alt="About us" class="img-fluid" style="width: 650px;" >
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
                        <p >
                            It is a long established fact that a reader will be distracted by the readable content
                            of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="visimisi-area">
        <div class="container-fluid  p-5">
            <div class="row justify-content-evenly">
                <div class="col-lg-4 text-center align-items-center">
                    <h3 class="mt-lg-5 mb-lg-5">Vision</h3>
                    <h5 class="mb-lg-3" style="letter-spacing: 1px">Shaping the future and humanity through technology</h5>
                    <p class="">We understand Technology is an important part of our society and will deliver us to a brighter future. But in the meantime, we also realized human is the most crucial part to encourage technology and make a brighter future for the world.</p>
                </div>
                <div class="col-lg-3 text-center">
                    <div class="about-image ">

                        <img src="{{ asset('img/marketing/Elements/Elements02.svg') }}" style="width: 350px" class="img-fluid " alt="">
                    </div>
                </div>
                <div class="col-lg-4 text-center">
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
