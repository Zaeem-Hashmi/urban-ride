@extends('layouts.admin.index')

@section('content')
<div class="row match-height">
    <!-- Medal Card -->
    <div class="col-xl-4 col-md-6 col-12">
        <div class="card card-congratulation-medal">
            <div class="card-body">
                <h5>Congratulations 🎉 John!</h5>
                <p class="card-text font-small-3">You have won gold medal</p>
                <h3 class="mb-75 mt-2 pt-50">
                    <a href="javascript:void(0);">$48.9k</a>
                </h3>
                <button type="button" class="btn btn-primary">View Sales</button>
                <img src="{{asset('app-assets/images/illustration/badge.svg')}}" class="congratulation-medal" alt="Medal Pic" />
            </div>
        </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
        <div class="card card-statistics">
            <div class="card-header">
                <h4 class="card-title">Statistics</h4>
                <div class="d-flex align-items-center">
                    <p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
                </div>
            </div>
            <div class="card-body statistics-body">
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-primary mr-2">
                                <div class="avatar-content">
                                    <i data-feather="trending-up" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">230k</h4>
                                <p class="card-text font-small-3 mb-0">Sales</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                        <div class="media">
                            <div class="avatar bg-light-info mr-2">
                                <div class="avatar-content">
                                    <i data-feather="user" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">8.549k</h4>
                                <p class="card-text font-small-3 mb-0">Customers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                        <div class="media">
                            <div class="avatar bg-light-danger mr-2">
                                <div class="avatar-content">
                                    <i data-feather="box" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">1.423k</h4>
                                <p class="card-text font-small-3 mb-0">Products</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="media">
                            <div class="avatar bg-light-success mr-2">
                                <div class="avatar-content">
                                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                                </div>
                            </div>
                            <div class="media-body my-auto">
                                <h4 class="font-weight-bolder mb-0">$9745</h4>
                                <p class="card-text font-small-3 mb-0">Revenue</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card card-congratulation-medal">
            <div class="card-body">
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div>
    <!--/ Statistics Card -->
</div>
@endsection

@section('page-js')
<script>
    var data, labels;
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
            method: "POST"
            , url: `/home`
        , })
        .done(function(response) {
            data = response.labels;
            labels = response.data;
            const ctx = document.getElementById('myChart');
            new Chart(ctx, {
                type: 'line'
                , data: {
                    labels: data
                    , datasets: [{
                        label: "expense"
                        , data: labels
                        , borderWidth: 1
                    }]
                }
                , options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }).fail(function(error) {
            alert('fail')
        });

</script>

@endsection
