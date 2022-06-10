@extends('layouts.AdminWindow')
x
@section('title', 'User Details:')

@section('content')
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">


                <div class="card">
                    <h5 class="card-header" style="color: #fff;background-color: #25d5f2;border-color: #25d5f2;">User Data</h5>
                    <div class="card-body">
                            <table class="table table-hover">

                                <tr>
                                    <th >id</th>
                                    <td >{{$data->id}}</td>
                                </tr>

                                <tr>
                                    <th >Username</th>
                                    <td >{{$data->name}}</td>
                                </tr>

                                <tr>
                                    <th >Email</th>
                                    <td >{{$data->email}}</td>
                                </tr>

                                <tr>
                                    <th >Roles</th>
                                    <td >
                                        @foreach($data->roles as $role)
                                            {{$role->name}}<a style="color:red;" href="{{route('laravelAdmin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}">
                                                            [x]
                                                           </a>
                                        @endforeach
                                    </td>
                                </tr>

                                <tr>
                                    <th >Created Date</th>
                                    <td >{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th> Add Role to User</th>
                                    <td>
                                        <form role="form" action="{{route('laravelAdmin.user.addrole',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <select name="role_id" style="height: 35px;width: 70px;">
                                                @foreach($roles as $role)
                                                   <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-primary">Add Role</button>
                                        </form>
                                    </td>
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
