@extends('layouts.AdminBase')

@section('title', 'Admin Category Panel')

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
                                <h2 class="pageheader-title">Category List </h2>
                            </div>
                        </div>
                    </div>
                </section>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Index Page</li>
                </ol>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                        <!-- recent orders  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header" style="background-color:black">
                                    <h3 class="card-title" style="color:white">Category Elements</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Parent</th>
                                                <th class="border-0">Tıtle</th>
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
                                                    <td>
                                                        @if($rs->image)
                                                        <img src="{{Storage::url($rs->image)}}" style=" height: 40px">
                                                        @endif
                                                    </td>
                                                    <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}} </td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('laravelAdmin.category.edit',['id'=>$rs->id])}}" class="btn btn-success" >Edit</a></td>
                                                    <td><a href="{{route('laravelAdmin.category.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                                    <td><a href="{{route('laravelAdmin.category.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a></td>
                                                </tr>
                                            @endforeach
                                                <tr>
                                                    <td colspan="9">
                                                        <a href="{{route('laravelAdmin.category.create')}}" class="btn btn-dark float-right">Add Category</a>
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
