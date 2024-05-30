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
                                <th>Name</th>
                                <th>Number</th>
                                <th>model</th>
                                <th>Chassis_number</th>
                                <th>Year</th>
                                <th>image</th>
                                <th>insurance_number</th>
                                <th>insurance_company</th>
                                <th>insurance_issue_date</th>
                                <th>insurance_expiry_date</th>
                                <th>registration_issue_date</th>
                                <th>registration_expiry_date</th>
                                <th>rta_permit</th>
                                <th>rta_issue_date</th>
                                <th>rta_expiry_date</th>
                                <th>Status Activity</th>
                                <th>Driver</th>
                                <th>Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehicles as $vehicle)
                                <tr>
                                    <td>{{ $vehicle->name }}</td>
                                    <td>{{ $vehicle->number }}</td>
                                    <td>{{ $vehicle->model }}</td>
                                    <td>{{ $vehicle->year }}</td>
                                    <td>{{ $vehicle->Chassis_number }}</td>
                                    <td>{{ $vehicle->image }}</td>
                                    <td>{{ $vehicle->insurance_number }}</td>
                                    <td>{{ $vehicle->insurance_company }}</td>
                                    <td>{{ $vehicle->insurance_issue_date }}</td>
                                    <td>{{ $vehicle->insurance_expiry_date }}</td>
                                    <td>{{ $vehicle->registration_issue_date }}</td>
                                    <td>{{ $vehicle->registration_expiry_date }}</td>
                                    <td>{{ $vehicle->rta_permit }}</td>
                                    <td>{{ $vehicle->rta_issue_date }}</td>
                                    <td>{{ $vehicle->rta_expiry_date }}</td>
                                    <td>{{ $vehicle->is_active }}</td>
                                    <td>{{ $vehicle->driver->user->name }}</td>
                                    <td>
                                        <div class='d-flex'>
                                            <a href="{{route('vehicle.edit',[$vehicle->id])}}" class="btn btn-primary p-2 my-2">Edit</a>
                                            <a href="{{route('vehicle.delete',[$vehicle->id])}}" class="btn btn-secondary p-2 my-2">Delete</a>
                                        </div>
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
