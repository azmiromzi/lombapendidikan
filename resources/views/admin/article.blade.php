@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid">

        <section class="mb-4">
            <div class="row">
              <div class="col-12 mt-3 mb-1">
                <h5 class="text-uppercase mb-4">Data User</h5>
              </div>
            </div>

            <div class="row">
              <div class="col-xl-4 col-sm-6 col-12 mb-4">
                <div class="card bg-primary shadow">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div>
                        <h3 class="text-light">{{ $article }}</h3>
                        <p class="mb-0 text-light">All Article</p>
                      </div>
                      <div class="align-self-center">
                          <span class="material-symbols-outlined fs-1 text-light">
                              article
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12 mb-4">
                <div class="card bg-danger">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div>
                        <h3 class="text-light">{{ $user }}</h3>
                        <p class="mb-0 text-light">User</p>
                      </div>
                      <div class="align-self-center">
                          <span class="material-symbols-outlined fs-1 text-light">
                              person
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-12 mb-4">
                <div class="card bg-secondary">
                  <div class="card-body">
                    <div class="d-flex justify-content-between px-md-1">
                      <div>
                        <h3 class="text-light">{{ $admin }}</h3>
                        <p class="mb-0 text-light">Admin</p>
                      </div>
                      <div class="align-self-center">
                          <span class="material-symbols-outlined fs-1 text-light">
                              person
                          </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </section>
        <table class="table table-primary table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">title</th>
                <th scope="col">Foto</th>
                <th scope="col">Tanggal Post</th>
                <th scope="col">other</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article )

                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $article->title }}</td>
                  <td><img width="50px" src="{{ asset('storage/'. $article->image) }}" alt=""></td>
                  <td>{{ $article->created_at->format('d - m - Y') }}</td>
                  <td>
                    <a href="{{ route('article.show', $article->id) }}">
                        <span class="material-symbols-outlined">
                            visibility
                        </span>
                    </a>
                  </td>
                </tr>
                @endforeach
                {{-- {{ $articles->links() }} --}}

            </tbody>
          </table>

    </div>

</div>


@endsection
