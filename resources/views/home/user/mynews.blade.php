@extends('layouts.frontbase')

@section('title', 'My News')

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
                <li class="breadcrumb-item"><a href="#">My Articles</a></li>
            </ul>
        </div>
    </div>


    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="section-title">
                        <h3>User Menu</h3>
                    </div>
                    @include('home.user.usermenu')
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        @foreach($news as $rs)
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{Storage::url($rs->image)}}" height="201" width="133" style="object-fit:cover;">
                                    <div class="mn-title">
                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
   @endsection
