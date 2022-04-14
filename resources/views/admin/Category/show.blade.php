@extends('layouts.AdminBase')

@section('title', 'Show Category: '.$data->title)

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
                            <h2 class="pageheader-title">{{$data->title}}</h2>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/laravelAdmin">Home</a></li>
                                <li class="breadcrumb-item active">Show Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <div class="card">
                    <h5 class="card-header" style="color: #fff;background-color: #25d5f2;border-color: #25d5f2;">Details</h5>
                    <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">{{$data->id}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">{{$data->title}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Keywords</th>
                                    <th scope="col">{{$data->keywords}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Description</th>
                                    <th scope="col">{{$data->description}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Status</th>
                                    <th scope="col">{{$data->status }}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Created Date</th>
                                    <th scope="col">{{$data->created_at}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Update Date</th>
                                    <th scope="col">{{$data->updated_at }}</th>
                                </tr>
                            </table>
                        <div>
                            <a href="/laravelAdmin/category/destroy/{{$data->id}}" class="btn btn-danger float-right" onclick="return confirm('Deleting !! Are you sure?')">Destroy Category</a>

                            <a href="/laravelAdmin/category/edit/{{$data->id}}" class="btn btn-success float-right" >Edit Category</a>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
