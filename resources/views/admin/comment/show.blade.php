@extends('layouts.AdminWindow')
x
@section('title', 'Comment & Review List '.$data->title)

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">


                <div class="card">
                    <h5 class="card-header" style="color: #fff;background-color: #25d5f2;border-color: #25d5f2;">Comment Data</h5>
                    <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th >id</th>
                                    <td >{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th >Name & Surname</th>
                                    <td >{{$data->user->name}}</td>
                                </tr>
                                <tr style="background-color: red;color: #FFFFFF">
                                    <th style="color:#FFFFFF;">News Title</th>
                                    <td>{{$data->news->title}}</td>
                                </tr>
                                <tr>
                                    <th >Subject </th>
                                    <td >{{$data->subject}}</td>
                                </tr>

                                <tr>
                                    <th >Comment</th>
                                    <td >{{$data->review}}</td>
                                </tr>


                                <tr>
                                    <th >Ip Number</th>
                                    <td >{{$data->ip}}</td>
                                </tr>
                                <tr>
                                    <th>Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th >Status</th>
                                    <td>{{$data->status}}</td>
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
                    </div>
                </div>
                    </div>
                </div>
            </div>



@endsection
