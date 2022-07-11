@extends('layouts.AdminBase')

@section('title', 'Admin Settings Panel')

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
                            <h2 class="pageheader-title">Settings</h2>
                            <div class="page-breadcrumb text-align-right">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('laravelAdmin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active">Settings</li>
                    </ol>
                </div>

                <form role="form" action="{{route('laravelAdmin.setting.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <section class="content">
                        <div class="tab-regular">
                            <ul class="nav nav-tabs " id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="smtp-email-tab" data-toggle="tab" href="#smtpemail" role="tab" aria-controls="smtpemail" aria-selected="false">Smtp Email</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="social-tab" data-toggle="tab" href="#social" role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="about-us-tab" data-toggle="tab" href="#aboutus" role="tab" aria-controls="aboutus" aria-selected="false">About Us </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="references-tab" data-toggle="tab" href="#references" role="tab" aria-controls="references" aria-selected="false">References</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Keywords</label>
                                        <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <input type="text" id="description" name="description" value="{{$data->description}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" id="company" name="company" value="{{$data->company}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Adress</label>
                                        <input type="text" id="adress" name="adress" value="{{$data->adress}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" id="phone" name="phone" value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" id="email" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control" name="status" id="input-select">
                                            <option selected>{{$data->status}}</option>
                                            <option>True</option>
                                            <option>False</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Inputfile">Icon</label>
                                        <div class="input-group">
                                            <input type="file" class="custom-file-input" name="icon">
                                            <label class="custom-file-label" for="Inputfile">Choose Icon File</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane fade" id="smtpemail" role="tabpanel" aria-labelledby="smtp-email-tap">
                                    <div class="form-group">
                                        <label>Stmp Server</label>
                                        <input type="text" id="stmpsever" name="stmpsever" value="{{$data->stmpsever}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Stmp Email</label>
                                        <input type="text" id="stmpemail" name="stmpemail" value="{{$data->stmpemail}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Stmp password</label>
                                        <input type="password" id="stmppassword" name="stmppassword" value="{{$data->stmppassword}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Stmp port</label>
                                        <input type="number" id="stmpport" name="stmpport" value="{{$data->stmpport}}" class="form-control">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="social" role="tabpanel" aria-labelledby="social-tab">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input type="text" id="fax" name="fax" value="{{$data->fax}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" id="facebook" name="facebook" value="{{$data->facebook}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" id="instagram" name="instagram" value="{{$data->instagram}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" id="twitter" name="twitter" value="{{$data->twitter}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" id="youtube" name="youtube" value="{{$data->youtube}}" class="form-control">
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="aboutus" role="tabpanel" aria-labelledby="about-us-tab">
                                    <div class="form-group">
                                        <label>About Us</label>
                                        <textarea id="aboutustext" name="aboutustext">
                                            {{$data->aboutus}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="form-group">
                                        <label>Contact</label>
                                        <textarea id="contacttext" name="contacttext" >
                                            {{$data->contact}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="references" role="tabpanel" aria-labelledby="references-tab">
                                    <div class="form-group">
                                        <label>References</label>
                                        <textarea id="referencestext" name="referencestext">
                                            {{$data->references}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Update Settings</button>
                                </div>

                            </div>
                        </div>

                    </section>

                </form>



            </div>
        </div>
    </div>


@endsection

@section('foot')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function(){
        $('#aboutustext').summernote();
        $('#contacttext').summernote();
        $('#referencestext').summernote();
        });
    </script>

@endsection





