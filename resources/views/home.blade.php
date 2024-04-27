@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>
                <div class="card-body">
                   <div class="row">

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-currency-usd avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Revenue</p>
                                            <h3 class="font-weight-medium my-2">$ <span data-plugin="counterup">65,841</span></h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-account-multiple avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Total Unique Visitors</p>
                                            <h3 class="font-weight-medium my-2"> <span data-plugin="counterup">26,521</span></h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-crown avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Number of Transactions</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">7,842</span></h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card-box widget-box-two widget-two-custom ">
                                    <div class="media">
                                        <div class="avatar-lg rounded-circle bg-primary widget-two-icon align-self-center">
                                            <i class="mdi mdi-auto-fix  avatar-title font-30 text-white"></i>
                                        </div>

                                        <div class="wigdet-two-content media-body">
                                            <p class="m-0 text-uppercase font-weight-medium text-truncate" title="Statistics">Conversation Rate</p>
                                            <h3 class="font-weight-medium my-2"><span data-plugin="counterup">2.07</span>%</h3>
                                            <p class="m-0">Jan - Apr 2019</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Revenue Comparison</h4>

                                    <div class="text-center">
                                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 25643 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container" dir="ltr">
                                        <div class="" style="height:280px" id="platform_type_dates_donut"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Visitors Overview</h4>

                                    <div class="text-center">
                                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-down-bold-hexagon-outline text-danger"></i> 5623 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container" dir="ltr">
                                        <div class="" style="height:280px" id="user_type_bar"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Goal Completion</h4>

                                    <div class="text-center">
                                        <h5 class="font-weight-normal text-muted">You have to pay</h5>
                                        <h3 class="mb-3"><i class="mdi mdi-arrow-up-bold-hexagon-outline text-success"></i> 12548 <small>USD</small></h3>
                                    </div>

                                    <div class="chart-container" dir="ltr">
                                        <div class="chart has-fixed-height" style="height:280px" id="page_views_today"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                        <!--- end row -->

                    </div> <!-- end container-fluid -->

                </div> <!-- end content -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
