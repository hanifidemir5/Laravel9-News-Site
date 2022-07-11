@extends('layouts.frontbase')

@section('title',' Categories')

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
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
            </ul>
        </div>
    </div>

    <div class="main-news">
        @php
            $mainCategories = \App\Http\Controllers\BaseController::allcategorylist()
        @endphp
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Categories</h2>
                    <div class="row">
                        @foreach($mainCategories as $rs)
                            <div class="col-md-4">
                                <div class="custom-menu">
                                    <div class="mn-img">
                                        <img src="{{Storage::url($rs->image)}}" height="201" width="133" style="object-fit:cover;">
                                        <div class="mn-title">
                                            <a href="{{route('categorynews',['id'=>$rs->id,'slug'=>$rs->title])}}" class="dropdown-item">{{$rs->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(count($rs->children))
                                <div class="col-md-4">
                                @include('home.subcategories',['children'=>$rs->children])
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
