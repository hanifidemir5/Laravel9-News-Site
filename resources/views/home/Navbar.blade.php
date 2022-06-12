<!-- Nav Bar Start -->
<div class="nav-ba " style="background-color: transparent">
    <div class="container">
        @php
            $mainCategories = \App\Http\Controllers\BaseController::maincategorylist()
        @endphp


        <div class="navbar navbar-expand-md bg-dark navbar-dark">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="/" class="navbar-brand">HOME</a>
                        @auth()
                        <div class="nav-item dropdown">
                            <span href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">My Account</span>
                            <div class="dropdown-menu" style="width: 200px">
                                <ul class="custom-menu">
                                    <li><a href="userpanel"><i class="fa fa-user" style="color: black"></i> My Account</a></li>
                                    <li><a href="#"><i class="fa fa-paperclip" style="color:black;"></i> My Articles</a></li>
                                    <li><a href="#"><i class="fa fa-comment" style="color:black;"></i> My Comments</a></li>
                                    <li><a href="logoutuser"><i class="fa fa-power-off" style="color:black;"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        @endauth
                    <div class="nav-item dropdown @if (!@isset($page)) show-on-click @endif">
                        <span href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Categories</span>
                        <div class="dropdown-menu">
                            <ul class="category-list">
                                @foreach($mainCategories as $rs)
                                    <li class="dropdown">
                                        <a href="{{route('categorynews',['id'=>$rs->id,'slug'=>$rs->title])}}" class="dropdown-item">{{$rs->title}}</a>
                                        <div class="custom-menu">
                                            <div class="row">
                                                @if(count($rs->children))
                                                    @include('home.categorytree',['children'=>$rs->children])
                                                @endif
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="{{route('references')}}" class="nav-item nav-link">References</a>
                    <a href="{{route('faq')}}" class="nav-item nav-link">FAQ</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                </div>
                <div class="social ml-auto">
                    <a href=""><i class="fab fa-twitter" style="color: #ffffff"></i></a>
                    <a href=""><i class="fab fa-facebook-f" style="color: #ffffff"></i></a>
                    <a href=""><i class="fab fa-linkedin-in" style="color: #ffffff"></i></a>
                    <a href=""><i class="fab fa-instagram" style="color: #ffffff"></i></a>
                    <a href=""><i class="fab fa-youtube" style="color: #ffffff"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Nav Bar End -->
