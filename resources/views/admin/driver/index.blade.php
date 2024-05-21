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
                                <th>Email</th>
                                <th>is_available</th>
                                <th>Address</th>
                                <th>username</th>
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
                                <th>vehicle_number</th>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-js')
    <script>
        $(function() {
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
            var table = $('.datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route('driver.ajax') }}',
                    type: "POST",
                    success: function(data) {
                        console.log('AJAX Data received:', data);
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', error);
                    }
                },
                columns: [{
                        data: 'name',
                        defaultContent: 'No name'
                    },

                    {
                        data: 'email'
                    },
                    {
                        data: 'is_available'
                    },
                    {
                        data: 'address'
                    },
                    {
                        data: 'username'
                    },
                    {
                        data: 'phone_number'
                    },
                    {
                        data: 'image',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'passport',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'passport_issue_date'
                    },
                    {
                        data: 'passport_expiry_date'
                    },
                    {
                        data: 'visa',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'visa_issue_date'
                    },

                    {
                        data: 'visa_expiry_date'
                    },
                    {
                        data: 'ID_card',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'ID_issue_date'
                    },

                    {
                        data: 'ID_expiry_date'
                    },
                    {
                        data: 'rta',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'rta_issue_date'
                    },

                    {
                        data: 'rta_expiry_date'
                    },
                    {
                        data: 'driving_license',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'driving_license_issue_date'
                    },

                    {
                        data: 'driving_license_expiry_date'
                    },

                    {
                        data: 'beneficiary_name'
                    },

                    {
                        data: 'IBAN'
                    },
                    {
                        data: 'bank_name'
                    },
                    {
                        data: 'branch_name'
                    },
                    {
                        data: 'vehicle_number'
                    },
                    {
                        data: 'vehicle'
                    },
                    {
                        data: 'user'
                    },




                ]

            });
            rawColumns: ['image']
        });
    </script>
@endsection
