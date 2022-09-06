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
                            <i class="fa fa-tags"></i> <a class="text-decoration-none"  href="#">Bootstrap4</a>
                        </li>
                    </ul>

                    {!! $article->desc !!}

                    <ul class="list-inline share-buttons">
                        <li class="list-inline-item">Share Post:</li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-facebook si-gray-round">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-twitter si-gray-round">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="social-icon-sm si-dark si-colored-linkedin si-gray-round">
                                <i class="fa fa-linkedin"></i>
                                </a>
                        </li>
                    </ul>
                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500">About Author</h4>
                    <div class="media d-flex ">
                        <i class="d-flex mr-3 fa fa-user-circle fa-5x text-primary mb-3 me-3"></i>
                        <div class="media-body">
                            <h5 class="mt-0 font700">{{ $article->user->name }}</h5> Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>
                    <hr class="mb40">
                    <h4 class="mb40 text-uppercase font500">Comments</h4>
                    @foreach ($comments as $comment )

                        <div class="media mb40">
                            <i class="d-flex mr-3 fa fa-user-circle-o fa-3x"></i>
                            <div class="media-body">
                                <h5 class="mt-0 font400 clearfix">
                                    <a href="#" class="float-right">Reply</a>
                                    {{ $comment->user->name }}</h5> {{ $comment->kontent }}
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

