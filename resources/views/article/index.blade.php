@extends('layouts.app')

@section('content')

<section class="site-banner overflow-hidden pt-5" style="background-color: rgb(243 245 255)">
    <div class="container d-flex justify-content-lg-between flex-wrap">
        @foreach ($articles as $article)
        <div class="card border-0 mb-3 shadow-lg card-hover" style="max-width: 540px;"
        >
            <div class="row g-0 " data-aos="fade-down"
            data-aos-easing="ease"
            data-aos-duration="500">
              <div class="col-md-4 p-2">
                @if ($article->image)
                <img
                src="{{ asset('storage/'. $article->image) }}"
                style="height: 300px; object-fit: cover"
                alt="Trendy Pants and Shoes"
                class="img-fluid rounded-start"
              />
              @else
              <img
              src="{{ asset('image/image-default-card.jpg') }}"
              alt="Trendy Pants and Shoes"
              class="img-fluid rounded-start"
            />
                @endif

              </div>
               <div class="col-md-8">
                 <div class="card-body">
                  <h5 class="card-title mb-3">{{ $article->title }}</h5>
                  <p class="card-text mb-5">
                   {{ $article->excerpt }}
                  </p>
                  <p class="card-text">
                      <a href="{{ route('article.show', $article->id) }}" class="btn " style="background-color: #14C38E; border-radius: 100px">Read More Text-></a>
                  </p>
                 </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>

    <div class="container d-flex justify-content-end mb-3">
        <a class="d-flex justify-content-end lingkaran align-items-center text-decoration-none" href="{{ route('article.create') }}"style="background-color: #14C38E; width: 50px; height: 50px; border-radius: 100%">
            <i class="d-flex bi bi-plus fs-1 text-white mx-auto"></i>
        </a>
    </div>

</section>

<!--  ======================= End Banner Area =======================  -->


@endsection
