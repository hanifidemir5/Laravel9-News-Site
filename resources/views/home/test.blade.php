
<div class="row tn-slider">
    @foreach($sliderdata as $rs)
        <div class="col-md-6">
            <div class="tn-img">
                <img src="{{Storage::url($rs->image)}}" height="350" width="550">
                <div class="tn-title">
                    <a href="">{{$rs->title}}</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Top News End-->
