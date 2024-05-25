@extends('layouts.client.index2')

@section('content')
    <!-- book section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
              <h2>
                Book Your ride now !
              </h2>
            </div>
            <div class="row">
              <div class="col-md-8 mx-auto">
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
                              <button type="submit" class="d-block mx-auto">
                                Book
                              </button>
                            </div>
                          </div>
                        </div>
                
                      </form>
                </div>
              </div>
            </div>
            <div class="contact_items">
      
              <a href="">
                <div class="img-box">
                  <img src="{{ asset('client/images/location.png')}}" alt="">
                </div>
                <h6>
                  Loram Ipusum ari
                  lo elisant na
                </h6>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="{{ asset('client/images/call.png')}}" alt="">
                </div>
                <h6>
                  (+12 1234456789)
                </h6>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="{{ asset('client/images/mail.png')}}" alt="">
                </div>
                <h6>
                  demo@gmail.com
                </h6>
              </a>
      
            </div>
            <div class="social_container">
              <div class="social-box">
                <div>
                  <a href="">
                    <img src="{{ asset('client/images/fb.png')}}" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="{{ asset('client/images/twitter.png')}}" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="{{ asset('client/images/linkedin.png')}}" alt="">
                  </a>
                </div>
                <div>
                  <a href="">
                    <img src="{{ asset('client/images/insta.png')}}" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
      </section>
    
      <!-- end book section -->
@endsection