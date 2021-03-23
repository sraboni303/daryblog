@extends('layouts.app')

@section('content')

<section>
    <div class="container">
      <div class="row text-center">
            <h1 class="my-5">Blog Posts</h1>
            <hr>
      </div>

        @if (Auth::check())
            <a href="/blog/create" class="btn btn-success">Create A Post</a>
        @endif

        @if (session()->has('message'))
            <p class="alert alert-success">{{ session()->get('message') }} <button class="close" data-dismiss="alert">&times;</button></p>
        @endif

        @foreach ($posts as $post)
            <div class="row">
                <div class="clearfix py-5 my-5">
                <div class="col-5 float-start">
                    <img src="{{ asset('images/' . $post->image_path) }}" width="400">
                </div>

                <div class="col-6 float-end">
                    <h2 class="text-uppercase text-gray fw-bolder">{{ $post->title }}</h2>
                    <p class="text-mute">By <span class="text-danger text-italic fw-bold"> {{ $post->user->name }} </span>, <span> {{ date('jS M Y', strtotime($post->updated_at)) }}</span></p>
                    <p class="fw-bold">{{ $post->content }}</p>
                    <a href="/blog/{{ $post->slug }}" class="btn btn-primary text-uppercase">Keep Reading</a>

                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <a class="btn btn-secondary" href="/blog/{{ $post->slug }}/edit">Edit</a>
                        <form action="/blog/{{ $post->slug }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
                </div>
            </div>
        @endforeach
    </div>
  </section>

@endsection

