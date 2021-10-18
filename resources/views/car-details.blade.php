@extends('layouts.app', ['activePage' => 'profile', 'titlePage' => __('User Profile')])

@section('content')
  <div class="content bg-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 text-center">
          <img class="img-fluid w-75 pt-3" src="{{ asset('images/car2.jpg') }}" alt="not found">
        </div>
        <div class="col-md-7">
          <h2>Toyota wish</h2>
          <p>Ksh. <span class="text-danger">1.2m</span></p>
          <p class="mt-3">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
          </p>
          <button class="btn-outline-success btn btn-sm mt-5">Sold to</button>
        </div>
      </div>
    </div>
  </div>
@endsection