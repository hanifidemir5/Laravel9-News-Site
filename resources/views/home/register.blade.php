@extends('layouts.frontbase')


@section('title','User Registration Page ')




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
                <li class="breadcrumb-item active">User Rregistration </li>
            </ul>
        </div>
    </div>



    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                @include('auth.register')
                </div>
            </div>
        </div>
    </div>


@endsection
