@extends('layouts.frontbase')

@section('title', 'My News')

@section('head')
    @include('home.header')
@endsection

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <h2 class="pageheader-title"> {{$data->title}}</h2>

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('userpanel.index')}}">User Panel</a></li>
                <li class="bre  adcrumb-item active">/ My News Show</li>
            </ul>
        </div>
    </div>

    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="contact">
                    <div class="container">
                        <div class="row" >
                            <div class="col-md-2">
                                <div class="section-title">
                                    <h3>User Menu</h3>
                                </div>
                                @include('home.user.usermenu')
                            </div>
                            <div class="col-md-10">
                                <h5 class="card-header" style="color: #fff;background-color: #25d5f2;border-color: #25d5f2;">Details</h5>
                                <div class="card-body">
                                        <table class="table table-hover">
                                            <tr>
                                                <th >id</th>
                                                <td >{{$data->id}}</td>
                                            </tr>
                                            <tr>
                                                <th >Category</th>
                                                <td >
                                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <th >Image</th>
                                                <td >
                                                    @if($data->image)
                                                        <img src="{{Storage::url($data->image)}}" style=" height: 200px">
                                                    @endif
                                                </td>

                                            </tr>

                                            <tr>
                                                <th >Title</th>
                                                <td >{{$data->title}}</td>
                                            </tr>

                                            <tr>
                                                <th >Keywords</th>
                                                <td >{{$data->keywords}}</td>
                                            </tr>

                                            <tr>
                                                <th >Description</th>
                                                <td >{{$data->description}}</td>
                                            </tr>

                                            <tr>
                                                <th >Detail İnformation</th>
                                                <td >{!! $data->detail !!}</td>
                                            </tr>

                                            <tr>
                                                <th >Type</th>
                                                <td >{{$data->type}}</td>
                                            </tr>

                                            <tr>
                                                <th >Status</th>
                                                <td >{{$data->status }}</td>
                                            </tr>

                                            <tr>
                                                <th >Created Date</th>
                                                <td >{{$data->created_at}}</td>
                                            </tr>

                                            <tr>
                                                <th >Update Date</th>
                                                <td >{{$data->updated_at }}</td>
                                            </tr>
                                        </table>
                                    <div>
                                        <a href="{{route('userpanel.mynewsdestroy',['id'=>$data->id])}}" class="btn btn-danger float-right" onclick="return confirm('Deleting !! Are you sure?')">Destroy News</a>

                                        <a href="{{route('userpanel.mynewsedit',['id'=>$data->id])}}" class="btn btn-success float-right" >Edit News</a>
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
