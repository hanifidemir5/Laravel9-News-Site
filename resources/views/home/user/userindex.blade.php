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
                <li class="breadcrumb-item active">User Panel</li>
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
                                        <h3>User Profile</h3>
                                        @include('profile.show')
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
