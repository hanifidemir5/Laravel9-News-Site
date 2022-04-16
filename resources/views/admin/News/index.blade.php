@extends('layouts.AdminBase')

@section('title', 'Admin News Panel')

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
                                <h2 class="pageheader-title">News List </h2>
                            </div>
                            <div>
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active">İndex Page</li>
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
                                    <h3 class="card-title" style="color:white">News Elements</h3>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id</th>
                                                <th class="border-0">Image</th>
                                                <th class="border-0">Category</th>
                                                <th class="border-0">Tıtle</th>
                                                <th class="border-0">Type</th>
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
                                                    <td>{{$rs->type}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="{{route('laravelAdmin.news.edit',['id'=>$rs->id])}}" class="btn btn-success" >Edit</a></td>
                                                    <td><a href="{{route('laravelAdmin.news.destroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                                    <td><a href="{{route('laravelAdmin.news.show',['id'=>$rs->id])}}" class="btn btn-info">Show</a></td>
                                                </tr>
                                            @endforeach
                                                <tr>
                                                    <td colspan="9">
                                                        <a href="{{route('laravelAdmin.news.create')}}" class="btn btn-dark float-right">Add News</a>
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
        </div>
@endsection
