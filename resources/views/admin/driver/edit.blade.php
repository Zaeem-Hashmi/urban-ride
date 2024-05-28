@extends('layouts.admin.index')

@section('content')
<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Driver</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('driver.update',[$driver->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Address</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City" name="address" value="{{old('address',$driver->address)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Phone number</label>
                                        <input type="number" id="company-column" class="form-control" name="phone_number" placeholder="phone_number"  value="{{old('phone_number',$driver->phone_number)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Profile pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" />
                                            <label class="custom-file-label" for="customFile">Choose profile pic</label>
                                            <img src="/storage/{{ $driver->image }}" width="20px" height="20px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Passport pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="passport" />
                                            <label class="custom-file-label" for="customFile">Choose passport pic</label>
                                            <img src="/storage/{{ $driver->image }}" width="20px" height="20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Passport_issue_date</label>
                                        <input type="date" id="company-column" class="form-control" name="passport_issue_date" placeholder="passport_issue_date"  value="{{old('passport_issue_date',$driver->passport_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Passport_expiry_date</label>
                                        <input type="date" id="insurance_company" class="form-control" name="passport_expiry_date" placeholder="passport_expiry_date"  value="{{old('passport_expiry_date',$driver->passport_expiry_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Visa pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="visa" />
                                            <label class="custom-file-label" for="customFile">Choose visa pic</label>
                                            <img src="/storage/{{ $driver->visa }}" width="20px" height="20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Visa_issue_date</label>
                                        <input type="date" id="insurance_issue_date" class="form-control" name="visa_issue_date" placeholder="insurance_issue_date"  value="{{old('insurance_issue_date',$driver->insurance_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">Visa_expiry_date</label>
                                        <input type="date" id="insurance_expiry_date" class="form-control" name="visa_expiry_date" placeholder="insurance_expiry_date"  value="{{old('insurance_expiry_date',$driver->insurance_expiry_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>ID_card pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="ID_card" />
                                            <label class="custom-file-label" for="customFile">Choose ID_card pic</label>
                                            <img src="/storage/{{ $driver->ID_card }}" width="20px" height="20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">ID_issue_date</label>
                                        <input type="date" id="insurance_issue_date" class="form-control" name="ID_issue_date" placeholder="ID_issue_date" value="{{old('ID_issue_date',$driver->ID_issue_date)}}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">ID_expiry_date</label>
                                        <input type="date" id="ID_expiry_date" class="form-control" name="ID_expiry_date" placeholder="ID_expiry_date" value="{{old('ID_expiry_date',$driver->ID_expiry_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>RTA pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="rta" name="rta" />
                                            <label class="custom-file-label" for="customFile">Choose rta pic</label>
                                            <img src="/storage/{{ $driver->rta }}" width="20px" height="20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">rta_issue_date</label>
                                        <input type="date" id="rta_issue_date" class="form-control" name="rta_issue_date" placeholder="rta_issue_date" value="{{old('rta_issue_date',$driver->rta_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">rta_expiry_date</label>
                                        <input type="date" id="rta_expiry_date" class="form-control" name="rta_expiry_date" placeholder="rta_expiry_date" value="{{old('rta_expiry_date',$driver->rta_expiry_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>driving_license pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="driving_license" />
                                            <label class="custom-file-label" for="customFile">Choose driving_license pic</label>
                                            <img src="/storage/{{ $driver->driving_license }}" width="20px" height="20px">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">driving_license_issue_date</label>
                                        <input type="date" id="driving_license_issue_date" class="form-control" name="driving_license_issue_date" placeholder="driving_license_issue_date" value="{{old('driving_license_issue_date',$driver->driving_license_issue_date)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">driving_license_expiry_date</label>
                                        <input type="date" id="driving_license_expiry_date" class="form-control" name="driving_license_expiry_date" placeholder="driving_license_expiry_date" value="{{old('driving_license_expiry_date',$driver->driving_license_expiry_date)}}"/>
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">beneficiary_name</label>
                                        <input type="text" id="company-column" class="form-control" name="beneficiary_name" placeholder="beneficiary_name" value="{{old('beneficiary_name',$driver->beneficiary_name)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">IBAN</label>
                                        <input type="text" id="company-column" class="form-control" name="IBAN" placeholder="IBAN" value="{{old('IBAN',$driver->IBAN)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">bank_name</label>
                                        <input type="text" id="company-column" class="form-control" name="bank_name" placeholder="bank_name" value="{{old('bank_name',$driver->bank_name)}}"/>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">branch_name</label>
                                        <input type="text" id="company-column" class="form-control" name="branch_name" placeholder="branch_name" value="{{old('branch_name',$driver->branch_name)}}"/>
                                    </div>
                                </div>
                              
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="select-country1">User</label>
                                        <select class="form-control" id="select-country1"  name="user_id">

                                            @foreach ($users as $user)
                                          
                                            <option value={{$user->id}} @if ($user->id ==$driver->user->id)
                                                selected
                                            @endif>{{$user->name}}</option>
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