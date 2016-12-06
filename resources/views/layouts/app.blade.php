    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

        <!-- Styles --
        <link href="/css/app.css" rel="stylesheet">-->
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">

        <!-- Scripts -->
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>

            @yield('head')
    </head>
    <body class="homepage">
            <div id="page-wrapper">
                
                <!-- Header -->
                <div id="header-wrapper">
                    <div id="header" class="container">
                        
                        <!-- Logo --
                            <h1 id="logo"><a href="index.html">Strongly Typed</a></h1>
                            <p>A responsive HTML5 site template. Manufactured by HTML5 UP.</p>
                            
                        <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a class="icon fa-home" href="{{ url('/') }}"><span>{{ trans('public/app.home') }}</span></a></li>
                                <li><a class="icon fa-retweet" href="{{ url('/user/buscarServicios') }}"><span>{{ trans('public/app.undertake') }}</span></a></li>
                                <li><a class="icon fa-sitemap" href="{{ url('/user/solicitarServicios') }}"><span>{{ trans('public/app.request') }}</span></a></li>     
                                <li>
                                    <a href="{{ url('/user/data') }}" class="icon fa-bar-chart-o"><span>{{ trans('public/app.data') }}</span></a>
                                    <!--<ul>
                                        <li><a href="Buscar.html">Busqueda</a></li>
                                        <li>
                                        <a href="#">Mapa</a></li>
                                        
                                        <li>
                                            <a href="#">Estadisticas</a>
                                            <ul>
                                                <li><a href="#">Ultimas busquedas</a></li>
                                                <li><a href="#">Mayores demandas</a></li>
                                                <li><a href="#">Categorias</a></li>
                                            </ul>
                                        </li><li><a href="#">Donde emprender</a></li>
                                        <li><a href="#">Solicitar servicios</a></li>
                                        </ul>-->
                                </li>
                                                
                                <li><a class="icon fa-cog" href="#"><span>{{ trans('public/app.profile') }}</span></a>
                                    <ul>
                                        <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">{{ trans('public/app.login') }}</a></li>
                                <li><a href="{{ url('/register') }}">{{ trans('public/app.register') }}</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                {{ trans('public/app.logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                                    </ul>
                                </li>
                            </ul>
                        </nav>                        
                    </div>
                </div>
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="/js/app.js"></script>
        <!-- Scripts -->
            <script src="/js/jquery.min.js"></script>
            <script src="/js/jquery.dropotron.min.js"></script>
            <script src="/js/skel.min.js"></script>
            <script src="/js/skel-viewport.min.js"></script>
            <script src="/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="/js/main.js"></script>
    </body>
    </html>
