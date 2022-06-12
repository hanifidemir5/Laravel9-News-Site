@extends('layouts.frontbase')


@section('title','User Panel')



@section('head')
    @include('home.header')
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active"><a href="{{route('userpanel.index')}}">User Panel</a></li>
                <li class="bre  adcrumb-item active">Comments</li>
            </ul>
        </div>
    </div>




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
                    <div class="contact-info">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>User Comments & Reviews</h3>
                                        <table class="table table-striped table-bordered first">
                                            <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">Id</th>
                                                <th class="border-0">News</th>
                                                <th class="border-0">Subject</th>
                                                <th class="border-0">Rate</th>
                                                <th class="border-0">Status</th>
                                                <th class="border-0" style="width: 40px">Update Status</th>
                                                <th class="border-0" style="width: 40px">Delete</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($comments as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td ><a style="color: dodgerblue" href="{{route('newspage',['id'=>$rs->news->id,'slug'=>$rs->news->title])}}" >{{$rs->news->title}}</a></td>
                                                    <td>{{$rs->subject}}</td>
                                                    <td>{{$rs->rate}}</td>
                                                    <td>
                                                        <form role="form" action="{{route('userpanel.reviewupdate',['id'=>$rs->id])}}" method="post">
                                                            @csrf
                                                            <select class="form-control" name="status" id="input-select" >
                                                                <option selected>{{$rs->status}}</option>
                                                                <option>True</option>
                                                                <option>False</option>
                                                            </select>
                                                    <td>
                                                        <button type="submit" class="btn float-right" style="color:#fff;background-color:#2ec551;border-color:#2ec551">Update Status</button>
                                                    </td>
                                                    </form>

                                                    </td>

                                                    <td>
                                                        <a href="{{route('userpanel.reviewdestroy',['id'=>$rs->id])}}" class="btn btn-danger"
                                                           onclick="return confirm('Deleting !! Are you sure?')">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
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
