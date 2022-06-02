@extends('layouts.AdminBase')

@section('title', 'Admin Faq Panel')

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
                <section class="content-header">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <div class="page-header">
                                <h2 class="pageheader-title">FAQ List </h2>
                            </div>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active">FAQ Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header" style="background-color:black">
                                    <h3 class="card-title" style="color:white">FAQ Elements</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id</th>
                                                <th class="border-0">Question</th>
                                                <th class="border-0">Answer </th>
                                                <th class="border-0">Status</th>
                                                  <th class="border-0" style="width: 40px">Edit</th>
                                                <th class="border-0" style="width: 40px">Delete</th>
                                                <th class="border-0" style="width: 40px">Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->question}}</td>
                                                    <td>{!!$rs->answer!!}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('laravelAdmin.faq.edit',['id'=>$rs->id])}}" class="btn btn-success" >Edit</a></td>
                                                    <td><a href="{{route('laravelAdmin.faq.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                                    <td><a href="{{route('laravelAdmin.faq.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a></td>
                                                </tr>
                                            @endforeach
                                                <tr>
                                                    <td colspan="10">
                                                        <a href="{{route('laravelAdmin.faq.create')}}" class="btn btn-dark float-right">Add Question</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end recent orders  -->

            </div>
        </div>
    </div>
@endsection
