@extends('layouts.admin.index')

@section('content')
<div class="content-body">
    <section id="multiple-column-form">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Expense</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" action="{{route('expense.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Type</label>
                                        <input type="text" id="first-name-column" class="form-control" placeholder="Expense Type" name="type" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Cost</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Last Name" name="cost" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-success mx-auto d-block mt-3">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection