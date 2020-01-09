<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('backend_assets/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('backend_assets/css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-orange">
    <div id="app">
        <nav class="navbar fixed-top navbar-light nav-login navbar-expand-md p-0">

            <img class="navbar-brand" src="backend_assets/img/new_logo.png" id="logo_custom" width="90px" alt="logo">
            <div class="p-3">
                <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon "></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto ">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Entrar') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Quero ser um investidor') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <!--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href=" route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                __('Logout')
            </a>

            <form id="logout-form" action="route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>-->
                    @endguest
                </ul>
            </div>
        </nav>
        @auth
        <div class="menu-bar">
            <a href="#">
                <i class="fas fa-user-circle"></i> {{ __('Perfil') }}
            </a>
            <a href="#">
                <i class="fas fa-users-cog"></i> {{ __('Configurações') }}
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Sair') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
        @endauth
        <main class="py-4 mt-3">
            @yield('content')
        </main>
    </div>
</body>
<script src="{{ asset('backend_assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('backend_assets/js/bootstrap.js')}}" type="text/javascript"></script>
<script src="{{ asset('backend_assets/js/awesome-landing-page.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $('.dropdown-toggle').click(function() {
        $('.dropdown-menu').toggleClass('show');
    });
</script>

</html>
