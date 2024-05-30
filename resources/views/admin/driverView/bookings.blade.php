@extends('layouts.admin.index')

@section('content')
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vehicles</h4>
                </div>
                <div class="card-body">
                    {{-- messsages --}}
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>Passenger Name</th>
                                <th>pickup-date</th>
                                <th>pickup-time</th>
                                <th>pickup-location</th>
                                <th>no-of-passengers</th>
                                <th>dropOff-location</th>
                                <th>desc</th>
                                <th>status</th>
                                <th>Actions</th>
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
                                        <a href="{{route('booking.jobDone',[$booking->id])}}" class="btn btn-primary">Job Done</a>
                                        
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

