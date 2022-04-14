@extends('layouts.AdminBase')

@section('title', 'Category Create')

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
                            <h2 class="pageheader-title">Add Category</h2>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/laravelAdmin">Home</a></li>
                                <li class="breadcrumb-item active">Create Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <div class="card">
                    <div class="card-header" style="background-color: #00CFDD">
                        <h3 class="card-title">Category Elements</h3>
                    </div>
                    <div class="card-body">
                        <form role="form" action="/laravelAdmin/category/store" method="post">
                            @csrf
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
                            <label>Status</label>
                            <select class="form-control" name="status" id="input-select">
                                <option>True</option>
                                <option>False</option>
                            </select>
                            <div class="card-footer">
                                <button type="submit" style="background-color: #00CFDD "class="btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
