@extends('layouts.admin.index')

@section('content')
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">{{Auth::user()->name}} Info</h4>
                </div>
                <div class="card-body">
                    {{-- messsages --}}
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered datatable">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>is_available</th>
                                <th>Address</th>
                                <th>phone_number</th>
                                <th>image</th>
                                <th>passport</th>
                                <th>passport_issue_date</th>
                                <th>passport_expiry_date</th>
                                <th>visa</th>
                                <th>visa_issue_date</th>
                                <th>visa_expiry_date</th>
                                <th>ID_card</th>
                                <th>ID_issue_date</th>
                                <th>ID_expiry_date</th>
                                <th>rta</th>
                                <th>rta_issue_date</th>
                                <th>rta_expiry_date</th>
                                <th>driving_license</th>
                                <th>driving_license_issue_date</th>
                                <th>driving_license_expiry_date</th>
                                <th>beneficiary_name</th>
                                <th>IBAN</th>
                                <th>bank_name</th>
                                <th>branch_name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usersInfo as $info)
                                <td>{{$info->user->name}}</td>
                                <td>{{$info->user->email}}</td>
                                <td>{{$info->is_available}}</td>
                                <td>{{$info->address}}</td>
                                <td>{{$info->phone_number}}</td>
                                <td><img src="storage/{{$info->image}}" alt="{{$info->user->name}}"></td>
                                <td><img src="storage/{{$info->passport}}" alt=""></td>
                                <td>{{$info->passport_issue_date}}</td>
                                <td>{{$info->passport_expiry_date}}</td>
                                <td><img src="storage/{{$info->visa}}" alt=""></td>
                                <td>{{$info->visa_issue_date}}</td>
                                <td>{{$info->visa_expiry_date}}</td>
                                <td><img src="storage/{{$info->ID_card}}" alt=""></td>
                                <td>{{$info->ID_issue_date}}</td>
                                <td>{{$info->ID_expiry_date}}</td>
                                <td><img src="storage/{{$info->rta}}" alt=""></td>
                                <td>{{$info->rta_issue_date}}</td>
                                <td>{{$info->rta_expiry_date}}</td>
                                <td><img src="storage/{{$info->driving_license}}" alt=""></td>
                                <td>{{$info->driving_license_issue_date}}</td>
                                <td>{{$info->driving_license_expiry_date}}</td>
                                <td>{{$info->beneficiary_name}}</td>
                                <td>{{$info->IBAN}}</td>
                                <td>{{$info->bank_name}}</td>
                                <td>{{$info->branch_name}}</td> 
                              <td>
                                <div class='d-flex'>
                                    <a href="{{route('driver.edit',[$info->id])}}" class="btn btn-primary p-2 my-2">Edit</a>
                                    {{-- <a href="{{route('driver.delete',[$info->id])}}" class="btn btn-secondary p-2 my-2">Delete</a> --}}
                                </div>
                              </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

