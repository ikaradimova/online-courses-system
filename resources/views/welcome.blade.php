{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Online courses system</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <link rel="stylesheet" href="/css/register.css">--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}

{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height main-w3layouts">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Online Courses System--}}
{{--                </div>--}}

{{--                <div class="container">--}}
{{--                    <div class="links">--}}
{{--                        <a>--}}
{{--                            For companies--}}
{{--                        </a>--}}
{{--                        <a>--}}
{{--                            For employees--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                @if (Route::has('login'))--}}
{{--                    <div class="links">--}}
{{--                        @if(Auth::guard('company')->check())--}}
{{--                            <a href="{{ url('/home') }}">Home</a>--}}
{{--                        @else--}}
{{--                            <a href="/company/login">Login</a>--}}
{{--                            @if (Route::has('register'))--}}
{{--                                <a href="/company/register">Register</a>--}}
{{--                            @endif--}}
{{--                        @endauth--}}
{{--                        <a href="/company/register">Register</a>--}}
{{--                        <a href="/company/login">Login</a>--}}
{{--                        <a href="#">Register</a>--}}
{{--                        <a href="#">Login</a>--}}
{{--                    </div>--}}
{{--                    <div class="top-right links">--}}
{{--                        @auth--}}
{{--                            <a href="{{ url('/home') }}">Home</a>--}}
{{--                        @else--}}
{{--                            <a href="{{ route('login') }}">Login</a>--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <a href="{{ route('register') }}">Register</a>--}}
{{--                            @endif--}}
{{--                        @endauth--}}
{{--                    </div>--}}
{{--                @endif--}}

{{--            </div>--}}
{{--            <ul class="colorlib-bubbles">--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--                <li></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
@extends('layouts.app')

@section('content')
    <div class="main-w3layouts wrapper">

        <div class="main-agileinfo main-agileinfo-welcome-screen">

            <div class="agileits-top agileits-top-welcome-screen">
                <h1 class="register-form-title">Online Courses System</h1>
                <div class="content">

                    <div class="container">
                        <div class="links links-welcome-screen">
                            <a>
                                For companies
                            </a>
                        </div>
                    </div>

                    @if (Route::has('login'))
                        <div class="links links-welcome-screen">
                            @if(Auth::guard('company')->check())
                                <a href="{{ url('/home') }}">Home</a>
                            @else
                                <a href="/company/login">Login</a>
                                @if (Route::has('register'))
                                    <a href="/company/register">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
            <ul class="colorlib-bubbles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
@endsection
{{--    </body>--}}
{{--</html>--}}
