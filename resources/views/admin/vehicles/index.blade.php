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
                                <th>Driver</th>
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
                    url: '{{ route('vehicle.ajax') }}',
                    type: "POST",

                },
                columns: [{
                        data: 'name'
                    },

                    {
                        data: 'number'
                    },
                    {
                        data: 'model'
                    },
                    {
                        data: 'year'
                    },
                    {
                        data: 'Chassis_number'
                    },
                    {
                        data: 'image',
                        render: function(data) {
                            return `<img src='/storage/${data}' style='width:70px;height:70px'>`;
                        }
                    },
                    {
                        data: 'insurance_number'
                    },
                    {
                        data: 'insurance_company'
                    },
                    {
                        data: 'insurance_issue_date'
                    },

                    {
                        data: 'insurance_expiry_date'
                    },

                    {
                        data: 'registration_issue_date'
                    },
                    {
                        data: 'registration_expiry_date'
                    },
                    {
                        data: 'rta_permit',
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
                        data: 'driver'
                    },
                    {
                        data: 'id',
                        render: function(data) {
                            return `
                            <div class='d-flex'>
                        <button type="button" class="btn btn-secondary p-2 my-2" onclick="alertConfirm('{{ route('vehicle.edit', ['vehicleType' => ':vehicleType']) }}'.replace(/:vehicleType/g, ${data}),'confirm','Are you sure you want to edit','warning','edit','cancel')">
                          Edit
                        </button>
                        <button type="button" class="btn btn-danger p-2 my-2" onclick="alertConfirm('{{ route('vehicle.delete', ['vehicleType' => ':vehicleType']) }}'.replace(/:vehicleType/g, ${data}),'confirm','Are you sure you want to delete','warning','delete','cancel')"">
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
