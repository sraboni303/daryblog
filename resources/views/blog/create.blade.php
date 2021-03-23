@extends('layouts.app')
@section('content')
<br>
<div class="container text-end">
    <div>
        <h1>Create Post</h1>
    </div>
</div>

<div class="container">

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    
    <form action="/blog" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
          </div>
        <div class="mb-3">
            <label class="form-label">Main Content</label>
            <textarea class="form-control" rows="6" name="content"></textarea>
        </div>
        <div class="mb-3">
            <input class="form-control" type="file" name="image">
        </div>
        <button type="submit" class="btn btn-danger">Submit</button>

    </form>
</div>

<br> <br> <br>
@endsection
