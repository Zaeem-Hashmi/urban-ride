@extends('layouts.admin.index')

@section('content')
<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Assign Driver</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('booking.update',[$booking->id])}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="select-country1">Available Drivers</label>
                                        <select class="form-control" id="select-country1"  name="driver_id">
                                            @foreach ($drivers as $driver)
                                          
                                            <option value={{$driver->id}}>{{$driver->name}}</option>
                                            @endforeach
                                           
                                        </select>
                                    </div>
                                </div>
                               

                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection