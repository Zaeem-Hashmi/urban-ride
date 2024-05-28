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

                },
                columns: [{
                data: 'username',
                defaultContent: 'No name'
                },

                {
                data: 'useremail'
                },
                {
                data: 'is_available'
                },
                {
                data: 'address'
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
                        data: 'id',
                        render: function(data) {
                            return `
                            <div class='d-flex'>
                        <button type="button" class="btn btn-secondary p-2 my-2" onclick="alertConfirm('{{ route('driver.edit', ['driver' => ':vehicleType']) }}'.replace(/:vehicleType/g, ${data}),'confirm','Are you sure you want to edit','warning','edit','cancel')">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger p-2 my-2" onclick="alertConfirm('{{ route('driver.delete', ['driver' => ':vehicleType']) }}'.replace(/:vehicleType/g, ${data}),'confirm','Are you sure you want to delete','warning','delete','cancel')"">
                          Delete
                        </button>
                        </div>`;
                        }
                    },

                ]

                });
                rawColumns: ['image']
                });

    </script>
@endsection
