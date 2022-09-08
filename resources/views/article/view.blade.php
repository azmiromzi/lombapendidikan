@extends('layouts.app')

@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container pb50">
    <div class="row">
        <div class="col-md-9 mb40">
            <article>
                <img src="{{ asset('storage/'. $article->image) }}" alt="" class="img-fluid mb30">
                <div class="post-content">
                    <h3>{{ $article->title }}</h3>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a class="text-decoration-none"  href="{{ route('user.show', $article->user->id) }}">{{ $article->user->name }}</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i><a class="text-decoration-none" href="#">{{ $article->created_at->format('D m Y') }}</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a class="text-decoration-none"  href="{{ route('category.show', $article->category->id) }}">{{ $article->category->name }}</a>
                        </li>
                    </ul>

                    {!! $article->desc !!}


                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500">About Author</h4>
                    <div class="media d-flex ">
                        <a href="{{ route('user.show', $article->user->id) }}" class="text-decoration-none"><i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary mb-3 me-3"></i></a>
                        <div class="media-body">
                            <h5 class="mt-0 fs-5 fw-bolder"><a href="{{ route('user.show', $article->user->id) }}" class="text-decoration-none">{{ $article->user->name }}</a></h5> Author memiliki pendidikan terakhir s2 teknik informatika dan kini bekerja di salah satu perusahaan terbesar di indonesia, dan menyempatkan dirinya untuk berbagi ilmu tentang web programing
                        </div>
                    </div>
                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase ">Comments</h4>
                    @foreach ($comments as $comment )

                        <div class="media mb40">
                          <div class="d-flex align-items-center">
                            <a class="text-decoration-none" href="{{ route('user.show', $comment->user->id) }}">  <i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i></a>

                            <h5 class="mt-0 ms-2 clearfix">
                                <a class="text-decoration-none" href="{{ route('user.show', $comment->user->id) }}">{{ $comment->user->name }}</a></h5>
                          </div>
                            <div class="media-body">
                                <p class="text-muted mt-2 ms-2">
                                    {{ $comment->kontent }}
                                </p>
                            </div>
                        </div>
                    @endforeach


                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500">Post a comment</h4>
                    <form role="form" action="{{ route('comment.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label>Comment</label>
                            <textarea class="form-control" name="kontent" rows="5" placeholder="Comment"></textarea>
                        </div>
                        <input type="hidden" value="{{ $article->id }}" name="article_id" >
                        <div class="clearfix float-right">
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        </div>
                    </form>
                </div>
            </article>
            <!-- post article-->

        </div>
        <div class="col-md-3 mb40">

        </div>
    </div>
</div>

@endsection

