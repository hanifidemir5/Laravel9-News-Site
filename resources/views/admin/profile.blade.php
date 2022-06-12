@extends('layouts.AdminBase')

@section('title','Admin Panel')

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Profile </h2>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Profile Page</li>
                        </ol>
                    </div>
                    <div class="contact">
                        <div class="container">
                            <div class="row" >
                                <div class="col-md-10">
                                    <div class="contact-info">
                                        <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <h3>User Profile</h3>
                                                        @include('profile.show')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


@endsection
