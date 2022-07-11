@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



@section('head')
    @include('home.header')
@endsection

@section('sidebar')
    @parent
@endsection


@section('Slider')
    @include('home.Slider')
@endsection

@section('content')

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Sports</h2>
                    <div class="cn-slider">
                        @foreach($sliderdata as $rs)
                            @if($rs->category_id==1 || $rs->category->parent_id == 1)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{Storage::url($rs->image)}}" width="330" height="170" style="object-fit:cover;">
                                    <div class="cn-title">
                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Technology</h2>
                    <div class="cn-slider">
                        @foreach($sliderdata as $rs)
                            @if($rs->category_id==2 || $rs->category->parent_id == 2)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{Storage::url($rs->image)}}" width="330" height="170" style="object-fit:cover;">
                                        <div class="cn-title">
                                            <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Business</h2>
                    <div class="cn-slider">
                        @foreach($sliderdata as $rs)
                            @if($rs->category_id==3 || $rs->category->parent_id == 3)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{Storage::url($rs->image)}}" width="330" height="170" style="object-fit:cover;">
                                        <div class="cn-title">
                                            <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>Entertainment</h2>
                    <div class="cn-slider">
                        @foreach($sliderdata as $rs)
                            @if($rs->category_id==4 || $rs->category->parent_id == 4)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{Storage::url($rs->image)}}" width="330" height="170" style="object-fit:cover;">
                                        <div class="cn-title">
                                            <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->

    <!-- Tab News Start-->
    <div class="tab-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#latest">Latest News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#featured">Featured News</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="latest" class="container tab-pane active">
                            @foreach($newestnews as $rs)
                                <div class="tn-news" style="width: 460px;height: 95px;">
                                    <div class="tn-img">
                                        <img src="{{Storage::url($rs->image)}}" width="150" height="95" style="object-fit:cover;">
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div id="popular" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-4.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-5.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-1.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                        <div id="featured" class="container tab-pane fade" style="width: 474px;height: 330px">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-1.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-2.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-3.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#m-viewed">Oldest News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#m-recent">Most Recent</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="m-viewed" class="container tab-pane active">
                            @foreach($oldestnews as $rs)
                                <div class="tn-news" style="width: 460px;height: 95px;">
                                    <div class="tn-img">
                                        <img src="{{Storage::url($rs->image)}}" width="150" height="95" style="object-fit:cover;">
                                    </div>
                                    <div class="tn-title">
                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div id="m-read" class="container tab-pane fade">

                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-2.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>

                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-1.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-3.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>

                        <div id="m-recent" class="container tab-pane fade">
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-5.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-4.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset('assets')}}/img/news-350x223-3.jpg" />
                                </div>
                                <div class="tn-title">
                                    <a href="">Lorem ipsum dolor sit amet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab News Start-->

    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        @foreach($mainnewsdata as $rs)
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

                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>Read More</h2>
                        @foreach($readmoredata as $rs)
                            <ul>
                                <li><a href="{{route('categorynews',['id'=>$rs->id,'slug'=>$rs->title])}}" class="dropdown-item">{{$rs->title}}</a></li>
                                <hr>
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection

