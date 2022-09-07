@extends('layouts.app')

@section('content')
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 offset-md-2 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>

            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="enter your name" value="{{ $user->name }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="enter your email" value="{{ $user->email }}">
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Your Password" >
                        </div>
                        <div class="col-md-12">
                            <label class="labels">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation" >
                        </div>

                    </div>


                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form>
                </div>
            </div>


    </div>


</div>
<section class="site-banner container-fluid overflow-hidden pt-5" style="background-color: rgb(243 245 255)">
    <h2 class="fw-bold container mb-5">
        Your Article
    </h2>
    <div class="container d-flex justify-content-lg-between flex-wrap">
        @if ($articles->count())
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
                      <a href="{{ route('article.edit', $article->id) }}" class="btn " style="background-color: #14C38E; border-radius: 100px">Edit Your Article-></a>
                      <form action="{{ route('article.destroy', $article->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                            <button type="submit" style="background-color: #14C38E; border-radius: 100px" class="btn">hapus</button>
                      </form>
                  </p>
                 </div>
                </div>
            </div>
        </div>

        @endforeach
        @else
        <h4 class="text-center">You Doesn't Have An Article</h4>
        @endif

    </div>

    <div class="container d-flex justify-content-end mb-3">
        <a class="d-flex justify-content-end lingkaran align-items-center text-decoration-none" href="{{ route('article.create') }}"style="background-color: #14C38E; width: 50px; height: 50px; border-radius: 100%">
            <i class="d-flex bi bi-plus fs-1 text-white mx-auto"></i>
        </a>
    </div>

</section>

@endsection
