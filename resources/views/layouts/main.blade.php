<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <title>My Firts Page</title>
    <link rel="stylesheet" href="/css/style.css">
{{--                <link rel="stylesheet" href="/css/index.css">--}}
{{--                <link rel="stylesheet" href="/css/app.css">--}}
    <link rel="stylesheet" href="/css/bootstrap.css">

</head>
<body>
<style>
</style>
<style type="text/css">

</style>
<div class="header">
    <h1>{{__('education.RealEstateAgency')}}</h1>
    <h2>{{__('education.City')}}</h2>
</div>
<div class="page-navigation">
    <div class="container">
        <ul class="page-navigation nav">
            <li><a class="@if(Request::is('/' )) btn-danger @endif" href="{{route('main')}}">{{__('education.home')}}</a></li>
            <li class="nav__el"><a class="@if(Request::is('offers')) btn-danger @endif" href="{{route('offers')}}">{{__('education.offers')}}</a>
                <div class="dropdown">
                    <ul class="dropdown__list">
                        <li class="dropdown__el"><a href="{{route('offers-add')}}">{{__('education.add')}}</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="{{route('users')}}" class="@if(Request::is('users')) btn-danger @endif">{{__('education.users')}}</a></li>
            <li><a href="{{route('admin')}}" class="@if(Request::is('admin')) btn-danger @endif">{{__('education.admin')}}</a></li>
{{--            <li><a href="{{route('users')}}" class="@if(Request::is('login')) btn-danger @endif">{{__('education.singin')}}</a></li>--}}

            @if(Route::has('login'))
                @auth
                    <li><div style="color: #2ab27b;"><a>{{ Auth::user()->name }}</a></div>
                        <ul>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    @endauth
                    @endif
        </ul>
    </div>
</div>
@if(Request::is('/'))
    @include('layouts.index-controler')
@endif
<main>
    @yield('content')
</main>
<div class="footer">
    <div class="container">
        <p>Copyright © Example.com 2018</p>
    </div>

{{--@if(Request::is('/'))--}}
{{--    @include('layouts.index-content')--}}
{{--@endif--}}

<script src="/js/app.js" ></script>
</body>
</html>
