@extends('layouts.AdminWindow')

@section('title', 'News Image Gallery')

@section('content')

                <h2>{{$news->title}}</h2>
                <hr>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header" style="background-color:black">
                            <h3 class="card-title" style="color:white">News İmage Elements</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered first">
                                    <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">id</th>
                                        <th class="border-0">Image</th>
                                        <th class="border-0">Tıtle</th>
                                        <th class="border-0" style="width: 40px">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $rs)
                                        <tr >
                                            <td>{{$rs->id}}</td>
                                            <td class="align-items-center">
                                                @if($rs->image)
                                                    <img src="{{Storage::url($rs->image)}}" style="height: 100px">
                                                @endif
                                            </td>
                                            <td>{{$rs->title}}</td>
                                            <td><a href="{{route('laravelAdmin.image.destroy',['pid'=>$news->id,'id'=>$rs->id])}}" class="btn btn-danger"
                                                   onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                    <tr>
                                        <form role="form" action="{{route('laravelAdmin.image.store',['pid'=>$news->id])}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <td colspan="2">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image">
                                                <label class="custom-file-label" for="customFile">Choose an image</label>
                                            </div>
                                            </td>
                                            <td  class="input-group">
                                                <input type="text" class="form-control" name="title" placeholder="Title" style="height: 38px">
                                            </td>
                                            <td>
                                                <input class="input-group-text" type="submit" value="Upload" style="width: 75px;height: 41px;background-color:forestgreen;color:white">
                                            </td>
                                        </form>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>


@endsection
