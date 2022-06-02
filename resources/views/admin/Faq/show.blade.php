@extends('layouts.AdminBase')

@section('title', 'Show FAQ: '.$data->title)

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
                            <h2 class="pageheader-title">FAQ {{$data->id}}</h2>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index',)}}">Home</a></li>
                                <li class="breadcrumb-item active">Show FAQ</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <div class="card">
                    <h5 class="card-header" style="color: #fff;background-color: #25d5f2;border-color: #25d5f2;">Answer</h5>
                    <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th >id</th>
                                    <td >{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th >Question</th>
                                    <td >{{$data->question}}</td>
                                </tr>

                                <tr>
                                    <th >Answer</th>
                                    <td >{!! $data->answer !!}</td>
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
                            <a href="{{route('laravelAdmin.faq.destroy',['id'=>$data->id])}}" class="btn btn-danger float-right" onclick="return confirm('Deleting !! Are you sure?')">Destroy FAQ</a>

                            <a href="{{route('laravelAdmin.faq.edit',['id'=>$data->id])}}" class="btn btn-success float-right" >Edit FAQ</a>
                        </div>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
