@extends('layouts.app')

@section('content')

<section class="site-banner overflow-hidden pt-5" style="background-color: rgb(243 245 255)">
    <div class="container d-flex justify-content-lg-between flex-wrap">
        <x-card></x-card>
        <x-card></x-card>
        <x-card></x-card>
        <x-card></x-card>
    </div>

    <div class="container d-flex justify-content-end mb-3">
        <a class="d-flex justify-content-end lingkaran align-items-center text-decoration-none" href="{{ route('article.create') }}"style="background-color: #14C38E; width: 50px; height: 50px; border-radius: 100%">
            <i class="d-flex bi bi-plus fs-1 text-white mx-auto"></i>
        </a>
    </div>

</section>

<!--  ======================= End Banner Area =======================  -->


@endsection
