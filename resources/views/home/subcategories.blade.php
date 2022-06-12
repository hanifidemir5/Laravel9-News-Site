
@foreach($children as $subcategory)

        @if(count($subcategory->children))
                @if(count($subcategory->children))
                    @include('home.subcategories',['children'=>$subcategory->children])
                @endif
                <div class="custom-menu">
                    <div class="mn-img">
                        <img src="{{Storage::url($rs->image)}}" height="201" width="133" style="object-fit:cover;">
                        <div class="mn-title">
                            <a href="{{route('categorynews',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
                        </div>
                    </div>
                </div>
                @include('home.categorytree',['children'=>$subcategory->children])
            <hr>
        @else
            <div class="custom-menu">
                <div class="mn-img">
                    <img src="{{Storage::url($subcategory->image)}}" height="201" width="133" style="object-fit:cover;">
                    <div class="mn-title">
                        <a href="{{route('categorynews',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a>
                    </div>
                </div>
            </div>
         @endif
@endforeach


