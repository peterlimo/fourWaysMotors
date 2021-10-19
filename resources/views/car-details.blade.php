@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content bg-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 text-center">
          <img class="img-fluid w-75 pt-3" src="{{ asset('images/car2.jpg') }}" alt="not found">
        </div>
        <div class="col-md-7">
          <h2>{{ $car->make }} {{ $car->model }}</h2>
          YOM {{ $car->y_o_m }} | <a href="">Other {{ $car->make }} cars. </a>
          <hr>
          <h3>Ksh. <span class="text-danger">1.2m</span></h3>
          <p class="mt-3">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
          </p>
          <button class="btn-outline-success btn btn-sm mt-5">Sold to</button>
          <a href="/make-sale/{{ $car_id }}"><button class="btn-outline-success btn btn-sm mt-5">sell car</button></a>
        </div>
      </div>
    </div>
  </div>
@endsection