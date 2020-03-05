@extends("layouts.app")
<div class="flex-center position-ref full-height">
    {{--    <header role="banner">--}}
    {{--        <h1>{{$company['name']}}</h1>--}}
    {{--        --}}{{--    <ul class="utilities">--}}
    {{--        --}}{{--        <li class="nav-item dropdown">--}}
    {{--        --}}{{--            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
    {{--        --}}{{--               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
    {{--        --}}{{--                <span class="caret"></span>--}}
    {{--        --}}{{--            </a>--}}

    {{--        --}}{{--            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--        --}}{{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--        --}}{{--                   onclick="event.preventDefault();--}}
    {{--        --}}{{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--        --}}{{--                    Изход--}}
    {{--        --}}{{--                </a>--}}

    {{--        --}}{{--                <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
    {{--        --}}{{--                      style="display: none;">--}}
    {{--        --}}{{--                    @csrf--}}
    {{--        --}}{{--                </form>--}}
    {{--        --}}{{--            </div>--}}
    {{--        --}}{{--        </li>--}}
    {{--        --}}{{--    </ul>--}}
    {{--        --}}{{--    @if (Route::has('login'))--}}
    {{--        <div class="top-right links">--}}
    {{--            <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">--}}
    {{--                Изход--}}
    {{--            </a>--}}

    {{--            <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
    {{--                  style="display: none;">--}}
    {{--                @csrf--}}
    {{--            </form>--}}
    {{--            --}}{{--                    @auth--}}
    {{--            --}}{{--                        <a href="{{ url('/home') }}">Home</a>--}}
    {{--            --}}{{--                    @else--}}
    {{--            --}}{{--                        <a href="{{ route('login') }}">Login</a>--}}

    {{--            --}}{{--                        @if (Route::has('register'))--}}
    {{--            --}}{{--                            <a href="{{ route('register') }}">Register</a>--}}
    {{--            --}}{{--                        @endif--}}
    {{--            --}}{{--                    @endauth--}}
    {{--        </div>--}}
    {{--        --}}{{--            @endif--}}
    {{--    </header>--}}
    {{--    @yield('content');--}}

    {{--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">--}}
    {{--        <div class="container">--}}
    {{--                        <a class="navbar-brand" href="{{ url('/') }}">--}}
    {{--                            {{ config('app.name', 'Laravel') }}--}}
    {{--                        </a>--}}

    {{--            <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
    {{--                <!-- Left Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav mr-auto">--}}
    {{--                    {{$company['name']}}--}}
    {{--                </ul>--}}

    {{--                <!-- Right Side Of Navbar -->--}}
    {{--                <ul class="navbar-nav ml-auto">--}}
    {{--                    <li class="nav-item dropdown">--}}

    {{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
    {{--                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
    {{--                               onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                Изход--}}
    {{--                            </a>--}}

    {{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--                                @csrf--}}
    {{--                            </form>--}}
    {{--                        </div>--}}
    {{--                    </li>--}}
    {{--                </ul>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </nav>--}}
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <h1>{{$company['name']}}</h1>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <div class="" aria-labelledby="">
                            <a class="" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Изход
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

        {{--        <ul class="utilities">--}}
        {{--            <li class="nav-item dropdown">--}}
        {{--                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"--}}
        {{--                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
        {{--                    <span class="caret"></span>--}}
        {{--                </a>--}}

        {{--                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
        {{--                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
        {{--                       onclick="event.preventDefault();--}}
        {{--                                                     document.getElementById('logout-form').submit();">--}}
        {{--                        Изход--}}
        {{--                    </a>--}}

        {{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST"--}}
        {{--                          style="display: none;">--}}
        {{--                        @csrf--}}
        {{--                    </form>--}}
        {{--                </div>--}}
        {{--            </li>--}}
        {{--        </ul>--}}
    </header>
</div>

<nav role="navigation">
    <ul class="main">
        <?php /* <li class="dashboard"><a href="/home">Начално меню</a></li> */?>
        <li class="users"><a href="/company/positions">Positions</a></li>
        <li class="users"><a href="/company/employees">Employees</a></li>
    </ul>
</nav>

