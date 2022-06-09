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
                    <div class="category-nav @if (!@isset($page)) show-on-click @endif">
                        <span href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Categories</span>
                        <div class="dropdown-menu">
                            <ul class="category-list">
                                @foreach($mainCategories as $rs)
                                    <li class="side-dropdown">
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
