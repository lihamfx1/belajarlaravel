@extends('master.master')

@section('name', 'About')

@section('content')
<marquee class="mt-2"><h2>Welcome to MyWeb</h2></marquee>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="\assets\img\1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="\assets\img\2.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div id="table">
  <marquee class="mt-2"><h2>Welcome to MyWeb</h2></marquee>
  <table class="table table-striped">
    <thead>
      <tr class="bg-warning">
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Grade</th>
        <th scope="col">School</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Liham</td>
        <td>12th</td>
        <td>SMKN 1 SBY</td>
      </tr>
    </tbody>
  </table>
</div>
<div>
    <div class="row row-cols-1 row-cols-md-3">
  <div class="col mb-4">
    <div class="card h-100">
      <img src="\assets\img\forest.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Forest</h5>
         <p class="card-text">This is a forest. This content is a little bit longer.</p>
      </div>
        <div class="card-footer">
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <small class="text-muted ml-4">Last updated 3 mins ago</small>
        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="\assets\img\donuts.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Donuts</h5>
         <p class="card-text">This is a donuts.</p>
      </div>
        <div class="card-footer">
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <small class="text-muted ml-4">Last updated 3 mins ago</small>
        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="\assets\img\breads.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Breads</h5>
         <p class="card-text">This is a breads.</p>
      </div>
        <div class="card-footer">
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <small class="text-muted ml-4">Last updated 3 mins ago</small>
        </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card h-100">
      <img src="\assets\img\scissor.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Scissor</h5>
         <p class="card-text">This is a scissor. This content is a little bit longer.</p>
      </div>
        <div class="card-footer">
        <a href="#" class="btn btn-primary">Go somewhere</a>
        <small class="text-muted ml-4">Last updated 3 mins ago</small>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
