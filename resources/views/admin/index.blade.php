@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container-fluid">

        <section>
          <div class="row">
            <div class="col-12 mt-3 mb-1">
              <h5 class="text-uppercase">Data User</h5>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-4 col-sm-6 col-12 mb-4">
              <div class="card bg-primary shadow">
                <div class="card-body">
                  <div class="d-flex justify-content-between px-md-1">
                    <div>
                      <h3 class="text-light">{{ $articles }}</h3>
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
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Create New Admin</a>
        </div>
        <table class="table table-primary table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Tanggal Bergabung</th>
                <th scope="col">other</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user )

                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at->format('d - m - Y') }}</td>
                  <td class="d-flex">
                    <a href="{{ route('user.show', $user->id) }}">
                        <span class="material-symbols-outlined">
                            visibility
                            </span>
                    </a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent" href="{{ route('logout') }}" onclick="return confirm('Apakah anda akan menghapus data ini?')">
                            <span class="material-symbols-outlined">
                                delete
                                </span>
                        </button>
                    </form>
                  </td>
                </tr>
                @endforeach
                {{ $users->links() }}

            </tbody>
          </table>

    </div>

</div>

@endsection
