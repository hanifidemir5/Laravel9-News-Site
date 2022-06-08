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
                                    <td >{{$data->name}}</td>
                                </tr>

                                <tr>
                                    <th >Phone Number</th>
                                    <td >{{$data->phone}}</td>
                                </tr>

                                <tr>
                                    <th >Email</th>
                                    <td >{{$data->email}}</td>
                                </tr>

                                <tr>
                                    <th >Subject</th>
                                    <td >{{$data->subject}}</td>
                                </tr>

                                <tr>
                                    <th >Message </th>
                                    <td >{!! $data->message !!}</td>
                                </tr>

                                <tr>
                                    <th >Ip Number</th>
                                    <td >{{$data->ip}}</td>
                                </tr>

                                <tr>
                                    <th >Status</th>
                                    <td >{{$data->status}}</td>
                                </tr>

                                <tr>
                                    <th >Created Date</th>
                                    <td >{{$data->created_at}}</td>
                                </tr>

                                <tr>
                                    <th >Update Date</th>
                                    <td >{{$data->updated_at }}</td>
                                </tr>

                                <tr>
                                    <th >Admin Note</th>
                                    <td>
                                        <form role="form" action="{{route('laravelAdmin.message.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <textarea class="text" cols="100" id="note" name="note">
                                                    {{$data->note}}
                                            </textarea>
                                            <div>
                                                <button type="submit" class="btn float-right" style="color:#fff;background-color:#2ec551;border-color:#2ec551">Update Note</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>

                            </table>
                    </div>
                </div>
                    </div>
                </div>
            </div>



@endsection
