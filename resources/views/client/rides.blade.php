@extends('layouts.client.index2')

@section('content')
    <!-- book section -->
    <section class="contact_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Your bookings
                </h2>
            </div>
            <div class="row">
                <div class="col-md-12 mx-auto">
                    <div class="form_container">
                        <div class="row" id="table-bordered">
                            <div class="col-12">
                                <div class="card">
                                
                                    <div class="table-responsive">
                                        <table class="table table-bordered datatable">
                                            <thead>
                                                <tr>
                                                    <th>Passenger Name</th>
                                                    <th>Pickup date</th>
                                                    <th>Pickup time</th>
                                                    <th>Pickup location</th>
                                                    <th>No of passengers</th>
                                                    <th>DropOff location</th>
                                                    <th>Desc</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                 
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bookings as $booking)
                                                    <tr>
                                                        <td>{{$booking->passenger_name}}</td>
                                                        <td>{{$booking->pickup_date}}</td>
                                                        <td>{{$booking->pickup_time}}</td>
                                                        <td>{{$booking->pickup_location}}</td>
                                                        <td>{{$booking->no_of_passengers}}</td>
                                                        <td>{{$booking->dropOff_location}}</td>
                                                        <td>{{$booking->desc}}</td>
                                                        <td>{{$booking->status}}</td>
                                                        <td>
                                                            <a href="{{route('booking.delete',[$booking->id])}}" class="btn btn-danger"> Cancel Booking</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact_items">

                <a href="">
                    <div class="img-box">
                        <img src="{{ asset('client/images/location.png') }}" alt="">
                    </div>
                    <h6>
                        Loram Ipusum ari
                        lo elisant na
                    </h6>
                </a>
                <a href="">
                    <div class="img-box">
                        <img src="{{ asset('client/images/call.png') }}" alt="">
                    </div>
                    <h6>
                        (+12 1234456789)
                    </h6>
                </a>
                <a href="">
                    <div class="img-box">
                        <img src="{{ asset('client/images/mail.png') }}" alt="">
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
                            <img src="{{ asset('client/images/fb.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{ asset('client/images/twitter.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{ asset('client/images/linkedin.png') }}" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="">
                            <img src="{{ asset('client/images/insta.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end book section -->
@endsection
