@extends('layouts.app')

@section('content')

<section>
    <div class="container-fluid text-center bg-img p-300">
      <h1 class="text-uppercase text-white">do you want to become a developer</h1>
      <button type="button" class="btn btn-light mt-3">Read More</button>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="clearfix py-5 my-5">
          <div class="col-5 float-start">
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="400">
          </div>

          <div class="col-6 float-end">
            <h2 class="text-uppercase text-gray fw-bolder">Strugling to be a better developer</h2>
            <p class="text-mute">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus, nihil!</p>
            <p class="fw-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque optio mollitia magni facilis, hic ipsa deserunt inventore, quas repudiandae quae quod non ipsam fuga perferendis.</p>
            <button type="button" class="btn btn-primary text-uppercase">find out more</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-info">
    <div class="container-fluid text-white text-center py-5 my-5">
      <div class="row position-relative">
        <div class="w-50">

          <div class="list-group position-absolute top-50 start-50 translate-middle">
            <b class="text-dark mb-3">I'm expert in...</b>
            <a href="#" class="list-group-item list-group-item-action">UX Design</a>
            <a href="#" class="list-group-item list-group-item-action">Project Management</a>
            <a href="#" class="list-group-item list-group-item-action">Digital Strategy</a>
            <a href="#" class="list-group-item list-group-item-action">Backend Development</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container py-5">

      <div class="row text-center py-4">
        <div class="col">
          <h1>Recent Posts</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus quis, earum vero nostrum magnam libero.</p>
        </div>
      </div>

      <div class="row">

          <div class="col-6 bg-info p-4">
            <p class="mb-4">PHP</p>
            <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur adipisci sit, dignissimos fugit, expedita, praesentium voluptates sed alias nobis ipsum accusamus aliquid nisi temporibus natus eaqu isi </h4>
            <button type="button" class="btn btn-outline-dark">Dark</button>
          </div>
          <div class="col-6"><img style="max-width: 100%;" src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg"></div>

      </div>
    </div>
  </section>
@endsection
