@extends('layouts.frontbase')

@section('title', 'My News')

@section('head')
    @include('home.header')
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')


    <div class="breadcrumb-wrap">
        <div class="container">
            <h2 class="pageheader-title"> My News</h2>

            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('userpanel.index')}}">User Panel</a></li>
                <li class="bre  adcrumb-item active"> / My News</li>
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

                <!-- recent orders  -->
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
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
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
                                                    <th class="border-0">Image Gallery</th>
                                                    <th class="border-0">Tıtle</th>
                                                    <th class="border-0">Type</th>
                                                    <th class="border-0">Status</th>
                                                    <th class="border-0" style="width: 40px">Edit</th>
                                                    <th class="border-0" style="width: 40px">Delete</th>
                                                    <th class="border-0" style="width: 40px">Show</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($news as $rs)
                                                    <tr>
                                                        <td>{{$rs->id}}</td>
                                                        <td>
                                                            @if($rs->image)
                                                                <img src="{{Storage::url($rs->image)}}" style=" height: 40px">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{route('laravelAdmin.image.index',['pid'=>$rs->id])}}"
                                                               onclick="return !window.open(this.href, '','top=50 left=100 width=1100,height=700')">
                                                                <img src="{{asset('admin')}}/assets/images/Galleryicon.png" alt="" style="height: 40px">
                                                            </a>
                                                        </td>
                                                        <td>{{$rs->title}}</td>
                                                        <td>{{$rs->type}}</td>
                                                        <td>{{$rs->status}}</td>
                                                        <td><a href="{{route('userpanel.mynewsedit',['id'=>$rs->id])}}" class="btn btn-success" >Edit</a></td>
                                                        <td><a href="{{route('userpanel.mynewsdestroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                               onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                                        <td><a href="{{route('userpanel.mynewsshow',['id'=>$rs->id])}}" class="btn btn-info">Show</a></td>
                                                    </tr>
                                                @endforeach
                                                <tr>
                                                    <td colspan="10">
                                                        <a href="{{route('userpanel.mynewscreate')}}" class="btn btn-dark float-right">Add News</a>
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
        </div>
    </div>
   @endsection
