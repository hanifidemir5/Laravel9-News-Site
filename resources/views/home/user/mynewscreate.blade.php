@extends('layouts.frontbase')

@section('title', 'My News')

@section('head')
    @include('home.header')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection
@section('head')


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
                <li class="bre  adcrumb-item active"> / My News Create</li>
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
                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-10">
                                <div class="card-header" style="background-color: purple">
                                    <h3 class="card-title" style="color: white">News Elements</h3>
                                </div>
                                <div class="card-body">


                                    <form role="form" action="{{route('userpanel.mynewsstore')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control select2" name="category_id" style="">
                                                @foreach($data as $rs)
                                                    <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Keywords</label>
                                            <input type="text" class="form-control" name="keywords" placeholder="Keywords">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Description</label>
                                            <input type="text" class="form-control" name="description" placeholder="Description">
                                        </div>
                                        <label for="customFile">Image</label>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" name="image">
                                            <label class="custom-file-label" for="customFile">Choose an image</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Detail</label>
                                            <textarea class="form-control" id="detail" name="detail">

                                            </textarea>
                                            <script>
                                                ClassicEditor
                                                    .create(document.querySelector('#detail'))
                                                    .then(editor => {
                                                        console.log(editor);
                                                    })
                                                    .catch(error=>{
                                                        console.error(error);
                                                    });
                                            </script>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Type</label>
                                            <select class="form-control" name="type" id="input-select">
                                                <option>Köşe Yazısı</option>
                                                <option>Haber</option>
                                            </select>
                                        </div>
                                        <label>Status</label>
                                        <select class="form-control" name="status" id="input-select">
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                        <div class="card-footer">
                                            <button type="submit" style="background-color: purple;color: white" class="btn float-right">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endsection
