@extends('layouts.master')

@section('content')
  <div class="welcome-container">

    <div class="content">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/show/a.jpg')}}" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/show/b.jpg')}}" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/show/c.jpg')}}" alt="Third slide">
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection