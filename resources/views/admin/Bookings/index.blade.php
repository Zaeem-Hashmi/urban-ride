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

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-js')
<script src="/assets/js/datatable/datatables.buttons.min.js"></script>
<script src="/assets/js/datatable/buttons.bootstrap4.min.js"></script>
<script src="/assets/js/datatable/jszip.min.js"></script>
<script src="/assets/js/datatable/pdfmake.min.js"></script>
<script src="/assets/js/datatable/vfs_fonts.js"></script>
<script src="/assets/js/datatable/buttons.html5.min.js"></script>
<script src="/assets/js/datatable/buttons.print.min.js"></script>
    <script>
        $(function() {
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            });
            var table = $('.datatable').dataTable({
                'bDestroy': true,
                    'processing': true,
                    'serverSide': true,
                    'dom': 'Blfrtip',
                    'paging': true,
                'buttons': [
                        {
                            extend: 'pdf',
                            footer: true,
                            exportOptions: {
                                columns: [0,1,2,3,4,5,7]
                            }
                        },
                        {
                            extend: 'csv',
                            footer: false,
                            exportOptions: {
                                columns: [0,1,2,3,4,5,7]
                            }

                        },
                        {
                            extend: 'excel',
                            footer: false,
                            exportOptions: {
                                columns: [0,1,2,3,4,5,7]
                            }
                        }
                    ],
                ajax: {
                    url: '{{ route('booking.ajax') }}',
                    type: "POST",

                },
                columns: [{
                        data: 'passenger_name'
                    },

                    {
                        data: 'pickup_date'
                    },
                    {
                        data: 'pickup_time'
                    },
                    {
                        data: 'pickup_location'
                    },
                    {
                        data: 'no_of_passengers'
                    },
                    {
                        data: 'dropOff_location'
                    },
                    {
                        data: 'desc'
                    },
                    {
                        data: 'status',
                        render: function(data) {
                            return `
                            <span class="badge bg-info">${data}</span>`;
                        }
                    }, {
                        data: 'id',
                        render: function(data) {
                            return `
                            <div class='d-flex'>
                        <button type="button" class="btn btn-secondary p-2 my-2 mr-1" onclick="alertConfirm('{{ route('booking.assignDriver', ['booking' => ':booking']) }}'.replace(/:booking/g, ${data}),'confirm','Are you sure you want to edit','warning','edit','cancel')"">
                          Assign Driver
                        </button>
                        <button type="button" class="btn btn-danger p-2 my-2" onclick="alertConfirm('{{ route('booking.delete', ['booking' => ':booking']) }}'.replace(/:booking/g, ${data}),'confirm','Are you sure you want to delete','warning','delete','cancel')"">
                          Delete
                        </button>
                        </div>`;
                        }
                    }
                ]

            });
        });
    </script>
@endsection
