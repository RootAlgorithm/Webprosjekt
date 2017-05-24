<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Westerdals Infoside @yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{ Html::style('css/styles.css') }}
    {{ Html::style('css/slick.css') }}
    {{ Html::style('css/slick-theme.css') }}

    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top nav-header-override">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ Html::image('img/LogoV3.png', '', array('class' => 'nav-image')) }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                {{--<li {{ (Request::is('nearby') ? 'class=active' : '') }}><a href="{{ url('/nearby') }}">I nærheten</a></li>
                <li {{ (Request::is('campus') ? 'class=active' : '') }}><a href="{{ url('/campus') }}">På campus</a></li>
                <li {{ (Request::is('discount') ? 'class=active' : '') }}><a href="{{ url('/discount') }}">Rabatter</a></li>
            @if (Auth::guest() == false)
                    <li {{ (Request::is('home') ? 'class=active' : '') }}><a href="{{ url('/home') }}">Min side</a></li>
                @endif--}}
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li {{ (Request::is('nearby') ? 'class=active' : '') }}><a href="{{ url('/nearby') }}">I nærheten</a>
                </li>
                <li {{ (Request::is('campus') ? 'class=active' : '') }}><a href="{{ url('/campus') }}">På campus</a>
                </li>
                <li {{ (Request::is('discount') ? 'class=active' : '') }}><a href="{{ url('/discount') }}">Rabatter</a>
                </li>
            {{--@if (Auth::guest() == false)
                <li {{ (Request::is('home') ? 'class=active' : '') }}><a href="{{ url('/home') }}">Min side</a></li>
            @endif--}}
            <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Logg inn</a></li>
                    <li><a href="{{ url('/register') }}">Registrer</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(Auth::user()->admin == true)
                                <li class="dropdown-submenu">
                                    <a href="{{ route('posts.index') }}">Innlegg</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('posts.create') }}">Opprett innlegg</a></li>
                                        <li><a href="{{ route('tags.index') }}">Tagger</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('users.index') }}">Brukere</a></li>
                            @endif
                            <li><a href="{{ url('/home') }}">Min side</a></li>
                            </li>
                            <li><a href="{{ url('/logout') }}">Logg ut</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@include('includes.message')

@yield('content')

<!-- JavaScripts -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
{{ Html::script('js/slick.min.js') }}
{{ Html::script('js/slideshow.js') }}
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
