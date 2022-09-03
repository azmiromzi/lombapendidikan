@extends('layouts.app')

@section('content')



<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
      </div>

      <div class="col-lg-8">

          <form action="{{ route('user.store') }}" method="post"  >
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">name</label>
              <input type="text" class="form-control @error('name')
                  is-invalid
              @enderror" id="name" name="name" value="{{ old('name') }}">
              @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>

              @enderror
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">email</label>
              <input type="text" class="form-control @error('email')
                  is-invalid
              @enderror" id="email" name="email" value="{{ old('email') }}">
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>

              @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">password</label>
              <input type="password" class="form-control @error('password')
                  is-invalid
              @enderror" id="password" name="password" value="{{ old('password') }}">
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>

              @enderror
            </div>
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">password_confirmation</label>
              <input type="text" class="form-control @error('password_confirmation')
                  is-invalid
              @enderror" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">
              @error('password_confirmation')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>

              @enderror
            </div>





            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
          </form>
    </div>
</div>







@endsection
