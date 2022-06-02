@extends('layouts.AdminBase')

@section('title', 'Edit FAQ: '.$data->title)

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
                            <h2 class="pageheader-title">Edit FAQ: {{$data->id}}</h2>
                            <div>
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                                    <li class="breadcrumb-item active">FAQ Edit Page</li>
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
                    <h3 class="card-title" style="color:#fff">FAQ Elements</h3>
                    </div>
                    <div class="card-body">
                        <form role="form" action="{{route('laravelAdmin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Question</label>
                                <input type="text" class="form-control" name="question" value="{{$data->question}}">
                            </div>
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Answer</label>
                                <textarea class="textarea" name="answer" id="answer">
                                    {{$data->answer}}
                                </textarea>
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
@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function()    {
            // Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection
