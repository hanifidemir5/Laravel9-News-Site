@extends('layouts.AdminBase')

@section('title', 'Edit Category: '.$data->title)

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
                            <h2 class="pageheader-title">Edit Category: {{$data->title}}</h2>
                            <div>
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active">Edit Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <div class="card">
                    <div class="card-header" style="background-color:#2ec551;border-color:#2ec551">
                    <h3 class="card-title" style="color:#fff">Category Elements</h3>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{route('laravelAdmin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>

                                <select class="form-control select2" name="parent_id" style="">
                                    <option value="0" selected="selected">Main Category</option>
                                    @foreach($datalist as $rs)
                                        <option value="{{$rs->id}}" @if ($rs->id == $data->parent_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Keywords</label>
                                <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Description</label>
                                <input type="text" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <label for="customFile">Image</label>
                            <div class="custom-file mb-3">
                                <input type="file" class="custom-file-input" name="image">
                                <label class="custom-file-label" for="customFile">Choose an image</label>
                            </div>
                            <label>Status</label>
                            <select class="form-control" name="status" id="input-select">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                            <div class="card-footer">
                                <button type="submit" class="btn float-right" style="color:#fff;background-color:#2ec551;border-color:#2ec551">Update Data</button>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
