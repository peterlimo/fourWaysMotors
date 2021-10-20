@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('Vehicle details')])

@section('content')
  <div class="content bg-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 pt-3 text-center">
          <img class="img-fluid" src="{{ asset('images/car2.jpg') }}" alt="not found">
          
        </div>
        <div class="col-md-7 ">
          <h2 class="pt-1">{{ $car->make }} {{ $car->model }}</h2>
          YOM {{ $car->y_o_m }} | <a href="">Other {{ $car->make }} cars. </a>
          <hr>
          {{ $car->reg_no }} | <small>{{ $car->color }}</small>
          <h3>Ksh. <span class="text-danger">{{ $car->price / 1000 }} m</span></h3>
          <p class="mt-3 text-justify">
            {{ $car->description }}
          </p>
          <button class="btn-outline-success btn btn-sm mt-5">Sale details</button>
          <a href="/make-sale/{{ $car_id }}"><button class="btn-outline-success btn btn-sm mt-5">Sell car</button></a>
          <a href="/make-sale/{{ $car_id }}"><button class="btn-outline-success btn btn-sm mt-5">Purchase details</button></a>
        </div>
        <div class="col-md-7 mt-3 offset-md-5">
          <h4>Specifications</h4>
          <div class="row">
            <div class="col-md-2">
              <span class="text-muted">Make</span> <br>
              <small>{{ $car->make }}</small>
            </div>
            <div class="col-md-2">
              <span class="text-muted">Model</span><br>
              <small>{{ $car->model }}</small>
            </div>
            <div class="col-md-2">
              <span class="text-muted">Color</span><br>
              <small>{{ $car->color }}</small>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-2">
              <span class="text-muted">YOM</span><br>
              <small>{{ $car->y_o_m }}</small>
            </div>
            <div class="col-md-2">
              <span class="text-muted">Made in</span><br>
              <small>Japan</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection