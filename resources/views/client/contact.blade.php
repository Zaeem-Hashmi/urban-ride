@extends('layouts.client.index2')

@section('content')
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

  <!-- end contact section -->
@endsection