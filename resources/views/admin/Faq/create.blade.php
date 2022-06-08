@extends('layouts.AdminBase')

@section('title', 'FAQ Create')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

@endsection
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
                            <h2 class="pageheader-title">Add FAQ</h2>
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{route('laravelAdmin.faq.index')}}">FAQ</a></li>
                                <li class="breadcrumb-item active">FAQ Create Page</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->

                <div class="card">
                    <div class="card-header" style="background-color: purple">
                        <h3 class="card-title" style="color: white">FAQ Elements</h3>
                    </div>
                    <div class="card-body">


                        <form role="form" action="{{route('laravelAdmin.faq.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Question</label>
                                <input type="text" class="form-control" id="question" name="question" placeholder="Question">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Answer</label>
                                <textarea class="form-control" id="answer" name="answer">

                                </textarea>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#answer'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error=>{
                                            console.error(error);
                                        });
                                </script>
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
@endsection
