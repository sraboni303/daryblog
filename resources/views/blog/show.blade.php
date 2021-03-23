@extends('layouts.app')

@section('content')

<section>
    <div class="container">

        <div class="row text-center">
                <h1 class="my-5">{{ $post->title }}</h1>
                <hr>
        </div>

        <div class="row">
            <div class="clearfix py-5 my-5">
            <div class="col-5 float-start">
                <img src="{{ asset('images/' . $post->image_path) }}" width="400">
            </div>

            <div class="col-6 float-end">
                <h2 class="text-uppercase text-gray fw-bolder">{{ $post->title }}</h2>
                <p class="text-mute">By <span class="text-danger text-italic fw-bold"> {{ $post->user->name }} </span>, <span> {{ date('jS M Y', strtotime($post->updated_at)) }}</span></p>
                <p class="fw-bold">{{ $post->content }}</p>
                <a href="/blog" class="btn btn-primary text-uppercase">Back</a>
            </div>
            </div>
        </div>

    </div>
  </section>

@endsection

