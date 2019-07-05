<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Bitconizando') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('backend_assets/js/app.js') }}" defer></script>
    <script src="{{ asset('backend_assets/js/front.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('backend_assets/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
    <div class="landing-page landing-page1">
            <!--<nav class="navbar navbar-transparent navbar-top navbar-expand-md custom-navbar" role="navigation">
                    <div class="container">
                         Brand and toggle get grouped for better mobile display
                        <div class="navbar-header">
                            <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar bar1"></span>
                            <span class="icon-bar bar2"></span>
                            <span class="icon-bar bar3"></span>
                            </button>
                            <a href="http://www.creative-tim.com">
                                <div class="logo-container">
                                    <div class="logo">
                                        <img src=" asset('backend_assets/img/new_logo.png') }}" alt="Creative Tim Logo">
                                    </div>
                                    <div class="brand">
                                        Creative Tim
                                    </div>
                                </div>
                            </a>
                        </div>
                     Collect the nav links, forms, and other content for toggling 
                        <div class="collapse navbar-collapse" id="example" >
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#">
                                    <i class="fa fa-facebook-square"></i>
                                    Like
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-twitter"></i>
                                    Tweet
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                    Pin
                                    </a>
                                </li>
                            </ul>
                        </div>
                         /.navbar-collapse 
                    </div>
                </nav>-->
    <header>
        <nav class="navbar fixed-top navbar-light navbar-expand-md">
            <a href="#home">
                <img class="navbar-brand" src="backend_assets/img/new_logo.png" id="logo_custom" width="90px"  alt="logo">
            </a>
                           <button class="navbar-toggler navbar-toggler-right custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                               <span class="navbar-toggler-icon "></span>
                           </button>
                             <div class="collapse navbar-collapse " id="collapsibleNavbar">
                                 <ul class="navbar-nav ml-auto ">
                                   <li class="nav-item">
                                     <a class="nav-link" href="#objetivo"><b>O que é?</b></a>
                                   </li>
                                   <li class="nav-item">
                                        <a class="nav-link" href="#vantagens"><b>Vantagens</b></a>
                                      </li>
                                   <li class="nav-item">
                                     <a class="nav-link" href="#integracao"><b>Integrações</b></a>
                                   </li>
                                   <li class="nav-item">
                                     <a class="nav-link" href="#resultados"><b>Resultados</b></a>
                                   </li>
                                   <li class="nav-item" style="margin:auto;">
                                    <a href="{{route('login')}}" class="btn btn-light" style="font-size:1rem;"><b>Entrar <i class="fas fa-user-circle"></i></b></a> 
                                   </li>
                                   <li class="nav-item" style="margin:auto;">
                                   <a href="{{route('register')}}" class="btn btn-light" style="font-size:1rem;"><b>Faça parte <i class="fas fa-user-plus"></i></b></a> 
                                   </li>  
                                 </ul>
                             </div>  
                            </nav>
    </header>
        
        <main class="row-fluid">
            @yield('content')
        </main>
    </div>
</div>
</body>
    <script src="{{ asset('backend_assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{asset('backend_assets/js/bootstrap.js')}}" type="text/javascript"></script>
    <script src="{{ asset('backend_assets/js/awesome-landing-page.js')}}" type="text/javascript"></script>    
    <script type="text/javascript">
        $(window).scroll(function() {
            if ($(this).scrollTop() > 1){  
                $('.navbar-brand img').attr('src','http://localhost:8000/backend_assets/img/new_logo.png'); //change src
                $('nav.navbar').addClass("sticky");
            }
            else{
                $('.navbar-brand img').attr('src','http://localhost:8000/backend_assets/img/white_logo.png');
                $('nav.navbar').removeClass("sticky");
            }
        });
        </script>
</html>