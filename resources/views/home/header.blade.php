<div class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tb-contact">
                    <p><i class="fas fa-envelope"></i>info@mail.com</p>
                    <p><i class="fas fa-phone-alt"></i>+012 345 6789</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tb-menu">
                    <a href="{{route('about')}}">About</a>
                    <a href="">Privacy</a>
                    <a href="">Terms</a>
                    <a href="{{route('contact')}}">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="brand">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4">
                <div class="b-logo">
                    <a href="/">
                        <img src="{{asset('assets')}}/img/logo.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-lg-3">

            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3 col-md-4 align-right">
                <div class="b-search">
                    <form action="{{route('searchnews')}}">
                        @csrf
                    <input name="search" type="text" placeholder="Search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    @auth
                        <i class="fa fa-user"></i>
                        <strong class="text-uppercase">{{Auth::user()->name}} ||</strong>
                        <i class="fa fa-sign-out-alt"></i><a href="/logoutuser">Logout</a>
                    @endauth
                </div>
                @guest
                        <strong style="alignment: right" class="text-uppercase">Join us</strong>
                        <i class="fa fa-arrow-alt-circle-down"></i><a href="/loginuser">Login</a> / <i class="fa fa-arrow-alt-circle-right"></i><a href="/registeruser">Register</a>
                @endguest
            </div>
        </div>

    </div>
</div>
