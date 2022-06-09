<!-- Top News Start-->
<div class="top-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6 tn-left">
                <div class="row tn-slider">
                    @foreach($sliderdata as $rs)
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="{{Storage::url($rs->image)}}" height="350" width="550" style="object-fit:cover;">
                                <div class="tn-title">
                                    <a href="{{route('newspage',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 tn-right">
                <div class="row">

                    @foreach($topnewsdata as $rs)
                        <div class="col-md-6">
                            <div class="tn-img">
                                <img src="{{Storage::url($rs->image)}}" height="175" width="165" style="object-fit:cover;">
                                <div class="tn-title">
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
