@extends('layouts.admin_layouts')
@section('Dashboard') active @endsection

@section('admin_content')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="pull-left page-title">Welcome !</h4>
                        <ol class="breadcrumb pull-right">
                            <li><a href="#">Admin</a></li>
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>

                <!-- Start Widget -->
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="mini-stat clearfix bx-shadow">
                            <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                            <div class="mini-stat-info text-right text-muted">
                                <span class="counter">000</span>
                                Total Users
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="mini-stat clearfix bx-shadow">
                            <span class="mini-stat-icon bg-success"><i class="ion-android-contacts"></i></span>
                            <div class="mini-stat-info text-right text-muted">
                                <span class="counter">000</span>
                                Total Doctor
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-4">
                        <div class="mini-stat clearfix bx-shadow">
                            <span class="mini-stat-icon bg-primary"><i class="ion-ios7-compose"></i></span>
                            <div class="mini-stat-info text-right text-muted">
                                <span class="counter">000</span>
                                Total Prescription
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End row-->




            </div> <!-- container -->

        </div> <!-- content -->

    </div>

@endsection
