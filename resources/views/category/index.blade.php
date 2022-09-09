@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">All category</h2>
    <div class="row text-white">
        @foreach ($categoriess as $category )

        <a href="{{ route('category.show', $category->id) }}" class="col-lg-4 col-6 position-relative text-center mb-3">
            <img src="https://images.unsplash.com/photo-1617042375876-a13e36732a04?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="Snow" style="width:100%;">
            <div class="position-absolute text-white" style="top: 50%; left: 50%; transform: translate(-50%, -50%)">{{ $category->name }}</div>
        </a>
        @endforeach

    </div>
</div>

@endsection
