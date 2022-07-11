@extends('layouts.frontbase')

@section('title', $data->title)

@section('head')
    @include('home.header')
@endsection

@section('sidebar')
    @parent
@endsection

@section('content')

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">News</a></li>
                <li class="breadcrumb-item"><a href="{{route('categorynews',['id'=>$data->id,'slug'=>$data->title])}}">{{$data->category->title}}</a></li>
                <li class="breadcrumb-item active">{{$data->title}}</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Single News Start-->
    <div class="single-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('home.messages')
                    <div class="sn-container">
                        <div class="sn-img" >
                            <img src="{{Storage::url($data->image)}}" />
                        </div>
                        <div class="sn-content">
                            {!!  $data->detail !!}
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="cat-news">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <div class="row cn-slider">
                                        @foreach($images as $rs)
                                            <div class="col-md-6">
                                                <div class="cn-img">
                                                    <img src="{{Storage::url($rs->image)}}" width="330" height="170" style="object-fit:cover;">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php
                        $average = $data->comment->average('rate');
                    @endphp
                    @if(count($data->comment) != 0)
                    <div style="margin-bottom: 45px;padding-bottom: 15px;border-bottom: 3px double #000000;" ></div>
                    @endif
                    <p style="color: red">{{$reviews->count('id')}} Review  <a href="#" style="color:blue;">Add Review</a></p>
                    <div class="review-rating">
                        @if ( $average==0)
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>  {{number_format($average,1)}}
                        @elseif ( $average<2 )
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>  {{number_format($average,1)}}
                        @elseif ($average<3 && $average>=2)
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>  {{number_format($average,1)}}
                        @elseif ($average<4 && $average>=3)
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: grey"></i>
                            <i class="fa fa-star " style="color: grey"></i>  {{number_format($average,1)}}
                        @elseif ($average<5 && $average>=4)
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: grey"></i>  {{number_format($average,1)}}
                        @elseif ($average==5)
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                            <i class="fa fa-star " style="color: orangered" ></i>
                        @endif
                        <br>
                            <div style="margin-bottom: 45px;padding-bottom: 15px;border-bottom: 3px double #000000;"></div>
                    </div>

                    @foreach($reviews as $rs)
                            <div class="single-news">
                                <div class="review-block">
                                    <div><i class="fa fa-user"  ></i>{{$rs->user->name}}   <i class="fa fa-clock"  ></i>{{$rs->created_at}}</div>
                                    <div class="review-rating pull-right">
                                        @if ($rs->rate==1)
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                        @elseif ($rs->rate==2)
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                        @elseif ($rs->rate==3)
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                        @elseif ($rs->rate==4)
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star " style="color: grey"></i>
                                        @elseif ($rs->rate==5)
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                            <i class="fa fa-star checked" style="color: orangered" ></i>
                                        @endif
                                    </div>
                                </div>
                                    <div>
                                    <strong>{{$rs->subject}}</strong>
                                    <p>{{$rs->review}}</p>
                                    </div>
                                <hr>
                            </div>
                    @endforeach
                    <div class="sn-related">
                        <h2>Related News</h2>
                            <div class="row sn-slider">
                                @foreach($relateddata as $rs)
                                    @if($rs->category_id==$data->category_id && $rs->id != $data->id || $rs->category->parent_id == $data->category_id || $rs->category_id == $data->category->parent_id)
                                        <div class="col-md-4">
                                            <div class="sn-img">
                                                <img src="{{Storage::url($rs->image)}}" width="240" height="152" style="object-fit:cover;">
                                                <div class="sn-title">
                                                    <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                    </div>


                </div>

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h2 class="sw-title">In This Category</h2>
                            <div class="news-list">
                                @foreach($relateddata as $rs)

                                    @if($rs->category_id == $data->category_id || $rs->category_id == $data->category->parent_id || $rs->category->parent_id == $data->category_id)
                                        <div class="nl-item">
                                            <div class="nl-img">
                                                <img src="{{Storage::url($rs->image)}}" height="63" width="100" style="object-fit:cover;">
                                            </div>
                                            <div class="nl-title">
                                                <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>


                        <div class="sidebar-widget">
                            <div class="tab-news">

                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#sports">Sports</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#technology">Technology</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#politics">Politics</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div id="sports" class="container tab-pane active">
                                        @foreach($newsdata as $rs)
                                            @if($rs->category_id==1 || $rs->category->parent_id == 1)
                                                <div class="tn-news">
                                                    <div class="tn-img">
                                                        <img src="{{Storage::url($rs->image)}}" width="100" height="63" style="object-fit:cover;">
                                                    </div>
                                                    <div class="tn-title">
                                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div id="technology" class="container tab-pane fade">
                                        @foreach($newsdata as $rs)
                                            @if($rs->category_id==2 || $rs->category->parent_id == 2 )
                                                <div class="tn-news">
                                                    <div class="tn-img">
                                                        <img src="{{Storage::url($rs->image)}}" width="100" height="63" style="object-fit:cover;">
                                                    </div>
                                                    <div class="tn-title">
                                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div id="politics" class="container tab-pane fade">
                                        @foreach($newsdata as $rs)
                                            @if($rs->category_id==5 || $rs->category->parent_id == 5)
                                                <div class="tn-news">
                                                    <div class="tn-img">
                                                        <img src="{{Storage::url($rs->image)}}" width="100" height="63" style="object-fit:cover;">
                                                    </div>
                                                    <div class="tn-title">
                                                        <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>


                            <div class="sidebar-widget">
                                <h2 class="sw-title">News Category</h2>
                                <div class="category">
                                    <ul>
                                        @foreach($categorydata as $rs)
                                            <li><a href="{{route('categorynews',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="contact">
                                <div class="sidebar-widget">
                                    <div class="row align-items-center">
                                        <div class="col-md-12">
                                            <div class="section-title">
                                                <h2 class="sw-title">Write your review</h2>
                                            </div>

                                            <div class="contact-form">
                                                <form id="review-form" action="{{route("storecomment")}}" method="post">
                                                    @csrf
                                                    <input class="input" type="hidden" name="news_id" value="{{$data->id}}"/>
                                                    <input class="input" type="hidden" name="title" value="{{$data->title}}"/>
                                                    <div class="form-group ">
                                                        <input type="text" class="form-control" name="subject" placeholder="Subject of the comment" />
                                                    </div>
                                                    <div class="form-group ">
                                                        <textarea class="form-control" rows="5" name="review" placeholder="Your review"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-rating">
                                                            <strong class="text-uppercase">Your Rating:</strong>
                                                            <div>
                                                                <input type="radio" id="star1" name="rate" value="1"/><span for="star5">1</span>
                                                                <input type="radio" id="star2" name="rate" value="2"/><span for="star4">2</span>
                                                                <input type="radio" id="star3" name="rate" value="3"/><span for="star3">3</span>
                                                                <input type="radio" id="star4" name="rate" value="4"/><span for="star2">4</span>
                                                                <input type="radio" id="star5" name="rate" value="5"/><span for="star1">5</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @auth
                                                        <button class="btn" type="submit">Submit</button>
                                                    @else
                                                        <a href="/login" class="btn" style="background-color: black;color: #FFFFFF">For submit review, please log in...</a>
                                                    @endauth
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single News End-->

@endsection

