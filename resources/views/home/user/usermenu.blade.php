
<ul style="list-style-type: none" >
    <li><a href="{{route('userpanel.mynewscreate',['id'=>\Illuminate\Support\Facades\Auth::id()])}}"><i class="fa fa-plus" style="color:black;"></i> Create Article</a></li>
    <li><a href="{{route('userpanel.mynews')}}"><i class="fa fa-file-alt" style="color:black;"></i> My Articles</a></li>
    <li><a href="{{route('userpanel.reviews')}}"><i class="fa fa-comment" style="color:black;"></i> My Reviews</a></li>
    <li><a href="{{route('logoutuser')}}"><i class="fa fa-power-off" style="color:black;"></i> Logout</a></li>
</ul>
