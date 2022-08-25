@extends('layouts.app')

@section('content')

<section class="site-banner overflow-hidden">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>
            <x-card></x-card>

        </div>
        <div class="d-flex justify-content-end mt-5 mb-3">
            <a href="{{ route('article.create') }}" class="scale-1 btn-primary roundedAdd text-decoration-none rounded-circle">
                <i class="bi bi-plus" style=" display: flex; font-size: 2rem; margin: auto;"></i>
            </a>
        </div>
    </div>
</section>

<!--  ======================= End Banner Area =======================  -->


@endsection
