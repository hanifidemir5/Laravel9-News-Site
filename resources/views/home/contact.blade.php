@extends('layouts.frontbase')


@section('title','Contact | '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))



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
                <li class="breadcrumb-item active">Contact</li>
            </ul>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <div class="contact-form">
                        @include('home.messages')
                        <form id="contact-form" action="{{route("storemessage")}}" method="post">
                            @csrf
                            <div class="form-group ">
                                <input type="text" class="form-control" name="name" placeholder="Your Name And Surname" />
                            </div>
                            <div class="form-group ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" />
                            </div>

                            <div class="form-group ">
                                <input type="tel" class="form-control" name="phone" placeholder="Your Phone Number" />
                            </div>
                            <div class="form-group ">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" />
                            </div>
                            <div class="form-group ">
                                <textarea class="form-control" rows="5" name="message" placeholder="Message"></textarea>
                            </div>
                            <div><button class="btn" type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="contact-info">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Get in Touch</h3>

                                        {!! $setting->contact !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection
