@extends('layouts.client.index')

@section('content')
    <!-- book section -->
  {{-- <section class="book_section">
    <div class="form_container">
      <form action="{{route('booking.store')}}" method="POST">
        @csrf
        <div class="form-row">
          <div class="col-lg-12">
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">Pick Up Date</label>
                <input type="date" class="form-control" placeholder="Pick Up Date " name="pickup-date">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Pickup time</label>
                <input type="time" class="form-control" placeholder="pickup-time " name="pickup-time">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-12">
                <label for="parkingNumber">Pickup Location</label>
                <input type="text" class="form-control" placeholder="pickup-location " name="pickup-location">
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <label for="parkingName">No of Passengers</label>
                <input type="number" class="form-control" placeholder="no-of-passengers" name="no-of-passengers">
              </div>
              <div class="col-md-6">
                <label for="parkingNumber">Drop Location</label>
                <input type="text" class="form-control" placeholder="Drop Location" name="dropOff-location">
              </div>
            </div>

            <div class="form-row">
              <div class="col-md-12">
                <label for="parkingName">Description</label>
                <textarea name="desc" class="form-control"  id="" cols="30" rows="5"></textarea>
              </div>
              
            </div>
          </div>
          <div class="col-lg-12">
            <div class="btn-container">
              <button type="submit" class="">
                Book
              </button>
            </div>
          </div>
        </div>

      </form>
    </div>
    <div class="img-box">
      <img src="{{ asset('client/images/book-car.png')}}" alt="">
    </div>
  </section> --}}

  <!-- end book section -->

  <!-- car section -->

  <section class="car_section layout_padding2-top layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Better Way For Find Your Favourite Ride
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
              Get Your Driver
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

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="img-box">
            <img src="{{ asset('client/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-4 col-lg-3">
          <div class="detail-box">
            <h2>
              About Our Services
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
            </p>
            <a href="{{ route('about') }}">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- best section -->

  <section class="best_section">
    <div class="container">
      <div class="book_now">
        <div class="detail-box">
          <h2>
            Our Rides Include
          </h2>
          <p>
            It is a long established fact that a reader will be distracted by the
          </p>
        </div>
        <div class="btn-box">
          <a href="{{ route('home') }}">
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
            <img src="{{asset('client/images/r-1.png')}}" alt="">
          </div>
          <div class="price"> 
            <a href="">
              Cargo Van
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/r-2.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Mini Car
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/r-3.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
                SUV
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/r-4.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Jeep
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/r-5.png')}}" alt="">
          </div>
          <div class="price">
            <a href="">
              Executive
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/r-6.png')}}" alt="">
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


  <!-- us section -->

  <section class="us_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Why choose Us
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
    </div>
    <div class="us_container layout_padding2">
      <div class="content_box">
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/u-1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Low Rent
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/u-2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Fast Car
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/u-3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Safe Car
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('client/images/u-4.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Quick Support
            </h5>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          Read More
        </a>
      </div>
    </div>
  </section>

  <!-- end us section -->

  <!-- client section -->

  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          What Is say Customer
        </h2>
        <p>
          It is a long established fact that a reader will be distracted by the
        </p>
      </div>
      <div class="layout_padding2-top">
        <div class="carousel-wrap ">
          <div class="owl-carousel">
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="{{asset('client/images/client-1.png')}}" alt="" class="img-1">
                    <img src="{{asset('client/images/client-1-white.png')}}" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Established
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="{{asset('client/images/client-2.png')}}" alt="" class="img-1">
                    <img src="{{asset('client/images/client-2-white.png')}}" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Blished
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="{{asset('client/images/client-1.png')}}" alt="" class="img-1">
                    <img src="{{asset('client/images/client-1-white.png')}}" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Establi
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box">
                <div class="detail-box">
                  <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem
                  </p>
                </div>
                <div class="client_id">
                  <div class="img-box">
                    <img src="{{asset('client/images/client-1.png')}}" alt="" class="img-1">
                    <img src="{{asset('client/images/client-1-white.png')}}" alt="" class="img-2">
                  </div>
                  <div class="name">
                    <h6>
                      Establi
                    </h6>
                    <p>
                      by the readable
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Request A call back
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="form_container">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Phone">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="contact_items">

        <a href="">
          <div class="img-box">
            <img src="{{asset('client/images/location.png')}}" alt="">
          </div>
          <h6>
            Loram Ipusum ari
            lo elisant na
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="{{asset('client/images/call.png')}}" alt="">
          </div>
          <h6>
            (+12 1234456789)
          </h6>
        </a>
        <a href="">
          <div class="img-box">
            <img src="{{asset('client/images/mail.png')}}" alt="">
          </div>
          <h6>
            urbanride@gmail.com
          </h6>
        </a>

      </div>
      <div class="social_container">
        <div class="social-box">
          <div>
            <a href="">
              <img src="{{asset('client/images/fb.png')}}" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{asset('client/images/twitter.png')}}" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{asset('client/images/linkedin.png')}}" alt="">
            </a>
          </div>
          <div>
            <a href="">
              <img src="{{asset('client/images/insta.png')}}" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

@endsection
