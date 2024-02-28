@extends('layouts.client.index2')

@section('content')
  <!-- car section -->

  <section class="car_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Better Way For Find Your Favourite Rides
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable
        </p>
      </div>
      <div class="car_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/c-1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Choose Your Destination
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/c-2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Get your Driver
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/c-3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Enjoy your ride
            </h5>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end car section -->


  <!-- best section -->

  <section class="best_section">
    <div class="container">
      <div class="book_now">
        <div class="detail-box">
          <h2>
            Our Best Cars
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the
          </p>
        </div>
        <div class="btn-box">
          <a href="">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end best section -->

  <!-- rent section -->

  <section class="rent_section layout_padding">
    <div class="container">
      <div class="rent_container">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/r-1.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Cargo Van
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/r-2.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Mini Car
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/r-3.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              SUV
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/r-4.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Jeep
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/r-5.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
                Executive
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('client/images/r-6.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Luxury
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          See More
        </a>
      </div>
    </div>
  </section>


  <!-- end rent section -->
@endsection