@extends('layouts.app')

@section('content')



<div class="container">

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
      </div>

      <div class="col-lg-8">

          <form action="{{ route('article.store') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title')
                  is-invalid
              @enderror" id="title" name="title" value="{{ old('title') }}">
              @error('title')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>

              @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Choose Your Category Article</label>
                <select class="form-select form-select-lg mb-3 btn" type="button" name="category_id" aria-label=".form-select-lg example">
                  <option selected>Open this select menu</option>
                  @foreach ($categoriess as $category )

                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>

              </div>

            <div class="mb-3">
                <label for="image" class="form-label">Article Image</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image')
                is-invalid
                @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')

                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                 @enderror
            </div>

            <div class="mb-3">
              <label for="desc" class="form-label">Body</label>
              @error('desc')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              <input id="desc" type="hidden" name="desc" value="{{ old('desc') }}">
                <trix-editor input="desc"></trix-editor>

            </div>

            <button type="submit" class="btn btn-primary mb-5">Create Post</button>
          </form>
    </div>
</div>
  <script>


      document.addEventListener('trix-file-accept', function(e)) {
          e.preventDefault()
      }


      function previewImage() {
          const image = document.querySelector('#image');
          const imgPreview = document.querySelector('.img-preview');

          imgPreview.style.display = 'block';

          const oFReader = new FileReader();
          oFReader.readAsDataURL(image.files[0]);

          oFReader.onload = function(oFREvent) {
              imgPreview.src = oFREvent.target.result;
          }
      }
  </script>






@endsection
