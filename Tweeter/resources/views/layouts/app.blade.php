<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="/js/app.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        #avatar {
        border-radius: 100%;
        background-color: rgb(183, 225, 157);
        width:50%;
        }
        .pagination {
        display: flex;
        align-items: center;
        justify-content: center;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="nav-extended green lighten-5">
            <div class="nav-wrapper">
                <a class="green-text text-darken-4" href="#" class="brand-logo"><img src="/images/twitter-4-48.png"><strong>Tweeter</strong></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger green-text text-darken-4"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class=" right hide-on-med-and-down">
                  <li><a href="/home"><h5 class="green-text text-darken-4"><strong>Home</strong></h5></a></li>
                  <li><a href="/readTweets"><h5 class="green-text text-darken-4"><strong>Tweets</strong></h5></a></li>
                @guest
                    <li><a href="login"><h5 class="green-text text-darken-4"><strong>{{ __('Login') }}</strong></h5></a></li>
                @if (Route::has('register'))
                    <li><a href="register"><h5 class="green-text text-darken-4"><strong>{{ __('Register') }}</strong></h5></a></li>
                @endif
                @else
                    <li><a href="/logout"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><h5 class="green-text text-darken-4"><strong>
                                    {{ __('Logout') }}</strong></h5>
                            </a>
                            <form id="logout-form" action="/logout" method="POST">
                                @csrf
                            </form>
                    </li>
                @endguest
                </ul>
            </div>
        </nav>
            <ul class="sidenav green lighten-5" id="mobile-demo">
                <div class="row">
                <li>
                    <div class="col s12 left-align">
                        <img src="/images/twitter-4-48.png">
                    </div>
                </li>
                <li>
                    <div class="col s12 left-align">
                    <a href="/home"><h5 class="green-text text-darken-4"><strong><i class="material-icons left">home</i>Home</strong></h5></a>
                    </div>
                </li>
                <li>
                    <div class="col s12 left-align">
                    <a href="/readTweets"><h5 class="green-text text-darken-4"><strong><i class="material-icons left">visibility</i>Tweets</strong></h5></a>
                    </div>
                </li>
                @guest
                 <li>
                     <div class="col s12 left-align"><a href="login"><h5 class="green-text text-darken-4"><strong><i class="material-icons left">lock_open</i>{{ __('Login') }}</strong></h5></a>
                </li>
                @if (Route::has('register'))
                <li><div class="col s12 left-align">
                    <a href="register"><h5 class="green-text text-darken-4"><strong><i class="material-icons left">assignment_ind</i>{{ __('Register') }}</strong></h5></a>
                </div>
                </li>
                @endif
                @else
                <li><div class="col s12 left-align"><a class="dropdown-item" href="logout"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><h5 class="green-text text-darken-4"><strong><i class="material-icons left">lock_outline</i>
                              {{ __('Logout') }}</strong></h5>
                      </a>
                      <form id="logout-form" action="logout" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                </li>
            </div>
            @endguest
          </ul>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
