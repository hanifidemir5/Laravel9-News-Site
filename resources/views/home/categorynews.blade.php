@extends('layouts.frontbase')

@section('title',$category->title . ' News')

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
                <li class="breadcrumb-item"><a href="#">{{$category->title}}</a></li>
            </ul>
        </div>
    </div>

    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$category->title}}</h2>
                    <div class="row">
                        @foreach($news as $rs)
                            <div class="col-md-4">
                                <div class="mn-img">
                                    <img src="{{Storage::url($rs->image)}}" height="201" width="133" style="object-fit:cover;">
                                    <div class="mn-title">
                                        <a href="{{route('newspage',['id'=>$rs->id])}}">{{$rs->title}}</a>
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
