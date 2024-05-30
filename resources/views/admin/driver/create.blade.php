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
                        <form class="form" action="{{route('driver.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Address</label>
                                        <input type="text" id="city-column" class="form-control" placeholder="City" name="address" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Phone number</label>
                                        <input type="number" id="company-column" class="form-control" name="phone_number" placeholder="phone_number" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Profile pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image" />
                                            <label class="custom-file-label" for="customFile">Choose profile pic</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Passport pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="passport" />
                                            <label class="custom-file-label" for="customFile">Choose passport pic</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Passport_issue_date</label>
                                        <input type="date" id="company-column" class="form-control" name="passport_issue_date" placeholder="passport_issue_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Passport_expiry_date</label>
                                        <input type="date" id="insurance_company" class="form-control" name="passport_expiry_date" placeholder="passport_expiry_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Visa pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="visa" />
                                            <label class="custom-file-label" for="customFile">Choose visa pic</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Visa_issue_date</label>
                                        <input type="date" id="insurance_issue_date" class="form-control" name="visa_issue_date" placeholder="insurance_issue_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">Visa_expiry_date</label>
                                        <input type="date" id="insurance_expiry_date" class="form-control" name="visa_expiry_date" placeholder="insurance_expiry_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>ID_card pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="ID_card" />
                                            <label class="custom-file-label" for="customFile">Choose ID_card pic</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">ID_issue_date</label>
                                        <input type="date" id="insurance_issue_date" class="form-control" name="ID_issue_date" placeholder="ID_issue_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">ID_expiry_date</label>
                                        <input type="date" id="ID_expiry_date" class="form-control" name="ID_expiry_date" placeholder="ID_expiry_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>RTA pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="rta" name="rta" />
                                            <label class="custom-file-label" for="customFile">Choose rta pic</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">rta_issue_date</label>
                                        <input type="date" id="rta_issue_date" class="form-control" name="rta_issue_date" placeholder="rta_issue_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">rta_expiry_date</label>
                                        <input type="date" id="rta_expiry_date" class="form-control" name="rta_expiry_date" placeholder="rta_expiry_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label>driving_license pic</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="driving_license" />
                                            <label class="custom-file-label" for="customFile">Choose driving_license pic</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">driving_license_issue_date</label>
                                        <input type="date" id="driving_license_issue_date" class="form-control" name="driving_license_issue_date" placeholder="driving_license_issue_date" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="insurance_expiry_date">driving_license_expiry_date</label>
                                        <input type="date" id="driving_license_expiry_date" class="form-control" name="driving_license_expiry_date" placeholder="driving_license_expiry_date" />
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">beneficiary_name</label>
                                        <input type="text" id="company-column" class="form-control" name="beneficiary_name" placeholder="beneficiary_name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">IBAN</label>
                                        <input type="text" id="company-column" class="form-control" name="IBAN" placeholder="IBAN" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">bank_name</label>
                                        <input type="text" id="company-column" class="form-control" name="bank_name" placeholder="bank_name" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">branch_name</label>
                                        <input type="text" id="company-column" class="form-control" name="branch_name" placeholder="branch_name" />
                                    </div>
                                </div>
                              
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="select-country1">User</label>
                                        <select class="form-control" id="select-country1"  name="user_id">

                                            @foreach ($users as $user)
                                          
                                            <option value={{$user->id}}>{{$user->name}}</option>
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