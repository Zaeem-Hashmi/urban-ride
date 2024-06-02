@extends('layouts.admin.index')

@section('content')
    <div class="row" id="table-bordered">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Expense</h4>
                </div>
                <div class="card-body">
                    <a href="{{ route('expense.create') }}" class="btn btn-sm btn-success">Create +</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered datatable w-100">
                        <thead>
                            <tr>
                                <th style="width: 10%">Id</th>
                                <th style="width: 30%">Type</th>
                                <th style="width: 20%">Cost</th>
                                <th style="width: 20%">Created at</th>
                                <th style="width: 20%">Action</th>
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
                                columns: [0,1,2,3],
                            },
                            customize : function(doc){
                                doc.content[1].table.widths = ['10%', '30%', '30%', '30%' ];
                            }
                        },
                        {
                            extend: 'csv',
                            footer: false,
                            exportOptions: {
                                columns: [0,1,2,3]
                            }

                        },
                        {
                            extend: 'excel',
                            footer: false,
                            exportOptions: {
                                columns: [0,1,2,3]
                            }
                        }
                    ],
                ajax: {
                    url: '{{ route('expense.ajax') }}',
                    type: "POST",

                },
                columns: [{
                        data: 'id'
                    },

                    {
                        data: 'expense_type'
                    },
                    {
                        data: 'cost'
                    },
                    {
                        data: 'created_at'
                    },
                    {
                        data: 'id',
                        render:function(data,row){
                            return `<a href="/expense/${data}/edit" class="btn btn-sm btn-primary">Edit</a><a href="/expense/${data}/delete" class="btn btn-sm btn-danger">Delete</a>`
                        }
                    }
                ]

            });
        });
    </script>
@endsection
