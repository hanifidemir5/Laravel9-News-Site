@extends('layouts.AdminBase')

@section('title', 'Show News: '.$data->title)

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
                                <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index',)}}">Home</a></li>
                                <li class="breadcrumb-item active">Show News</li>
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
                                    <th scope="col">Category</th>
                                    <th scope="col">{{$data->category_id}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style=" height: 200px">
                                        @endif
                                    </th>

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
                                    <th scope="col">Detail İnformation</th>
                                    <th scope="col">{{$data->detail}}</th>
                                </tr>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">{{$data->type}}</th>
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
                            <a href="{{route('laravelAdmin.news.destroy',['id'=>$data->id])}}" class="btn btn-danger float-right" onclick="return confirm('Deleting !! Are you sure?')">Destroy News</a>

                            <a href="{{route('laravelAdmin.news.edit',['id'=>$data->id])}}" class="btn btn-success float-right" >Edit News</a>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
