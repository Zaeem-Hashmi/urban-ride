@extends('layouts.admin.index')

@section('content')
<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Vehicle</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('vehicle.update',[$vehicleType->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Name</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="First Name" name="name" value="{{old('name',$vehicleType->name)}}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Number</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="number" value="{{old('number',$vehicleType->number)}}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">model</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City" name="model" value="{{old('model',$vehicleType->model)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Year</label>
                                        {{-- <input type="text" class="form-control flatpickr-inline" placeholder="YYYY-MM-DD" /> --}}
                                        <input type="number"  class="form-control flatpickr-inline" min="1900" max="2099" step="1"  name="year"  placeholder="YYYY" value="{{old('year',$vehicleType->year)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Chassis_number</label>
                                        <input type="text" id="company-column" class="form-control" name="Chassis_number" placeholder="Chassis_number" value="{{old('Chassis_number',$vehicleType->Chassis_number)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Vehicle pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" />
                                            <label class="custom-file-label" for="customFile">Choose vehicle pic</label>
                                            <img src="/storage/{{ $vehicleType->image }}" width="20px" height="20px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Insurance_number</label>
                                        <input type="text" id="company-column" class="form-control" name="insurance_number" placeholder="insurance_number" value="{{old('insurance_number',$vehicleType->insurance_number)}}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Insurance_company</label> 
                                        <input type="text" id="insurance_company" class="form-control" name="insurance_company" placeholder="insurance_company" value="{{old('insurance_company',$vehicleType->insurance_company)}}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Insurance_issue_date</label>
                                        <input type="date" id="insurance_issue_date" class="form-control" name="insurance_issue_date" placeholder="insurance_issue_date" value="{{old('insurance_issue_date',$vehicleType->insurance_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">insurance_expiry_date</label>
                                        <input type="date" id="insurance_expiry_date" class="form-control" name="insurance_expiry_date" placeholder="insurance_expiry_date" value="{{old('insurance_expiry_date',$vehicleType->insurance_expiry_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">registration_issue_date</label>
                                        <input type="date" id="company-column" class="form-control" name="registration_issue_date" placeholder="registration_issue_date" value="{{old('registration_issue_date',$vehicleType->registration_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">registration_expiry_date</label>
                                        <input type="date" id="company-column" class="form-control" name="registration_expiry_date" placeholder="registration_expiry_date" value="{{old('registration_expiry_date',$vehicleType->registration_expiry_date)}}"/>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>RTA permit</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="rta_permit" />
                                            <label class="custom-file-label" for="customFile">Choose RTA permit</label>
                                            <img src="/storage/{{ $vehicleType->rta_permit }}" width="20px" height="20px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">rta_issue_date</label>
                                        <input type="date" id="company-column" class="form-control" name="rta_issue_date" placeholder="rta_issue_date" value="{{old('rta_issue_date',$vehicleType->rta_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">rta_expiry_date</label>
                                        <input type="date" id="company-column" class="form-control" name="rta_expiry_date" placeholder="rta_expiry_date" value="{{old('rta_expiry_date',$vehicleType->rta_expiry_date)}}"/>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="select-country1">Driver</label>
                                        <select class="form-control" id="select-country1" required name="driver_id">

                                            @foreach ($drivers as $driver)
                                            <option value={{$driver->id}} @if ($driver->id == $vehicleType->driver->id)
                                                selected
                                            @endif>{{$driver->name}}</option>
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