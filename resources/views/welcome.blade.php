<!DOCTYPE HTML>
<!--
    Directive by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>{{ trans('public/welcome.title') }}</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    </head>
    <body>
        
        <!-- Header -->
        <div id="header">
            <span class="logo icon fa-paper-plane-o"></span>
            <h1>AFREG-LUA. </h1>
            <p>
                <h3>{{ trans('public/welcome.welcome') }}</h3> 
                <h4>{{ trans('public/welcome.subtitle') }}</h4>
            </p>
        </div>
        
        <!-- Main -->
        <div id="main">
            
            <header class="major container 75%">
                <h2></h2>
                <!--
                    <p>Tellus erat mauris ipsum fermentum<br />
                    etiam vivamus nunc nibh morbi.</p>
                -->
            </header>
            
            <div class="box alt container">
                <section class="feature left">
                    <a href="#" class="image icon fa-signal"><img src="images/pic01.jpg" alt="" /></a>
                    <div class="content">
                        <h3>{{ trans('public/welcome.statistics') }}</h3>
                        <p>{{ trans('public/welcome.statistics_text') }}</p>
                    </div>
                </section>
                <section class="feature right">
                    <a href="#" class="image icon fa-mobile"><img src="images/pic02.jpg" alt="" /></a>
                    <div class="content">
                        <h3>{{ trans('public/welcome.find') }}</h3>
                        <p>{{ trans('public/welcome.find_text') }}</p>
                    </div>
                </section>
                <section class="feature left">
                    <a href="#" class="image icon fa-code"><img src="images/pic03.jpg" alt="" /></a>
                    <div class="content">
                        <h3>{{ trans('public/welcome.feedback') }}</h3>
                        <p>{{ trans('public/welcome.feedback_text') }}</p>
                    </div>
                </section>
            </div>
            
            <!--
                <div class="box container">
                <header>
                <h2>A lot of generic stuff</h2>
                </header>
                <section>
                <header>
                <h3>Paragraph</h3>
                <p>This is the subtitle for this particular heading</p>
                </header>
                <p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
                habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
                leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
                amet risus elit.</p>
                </section>
                <section>
                <header>
                <h3>Blockquote</h3>
                </header>
                <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
                tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
                </section>
                <section>
                <header>
                <h3>Divider</h3>
                </header>
                <p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
                ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
                facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
                tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere cubilia.</p>
                <hr />
                <p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
                ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
                facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
                tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere cubilia.</p>
                </section>
                <section>
                <header>
                <h3>Unordered List</h3>
                </header>
                <ul class="default">
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                </ul>
                </section>
                <section>
                <header>
                <h3>Ordered List</h3>
                </header>
                <ol class="default">
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                <li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
                </ol>
                </section>
                <section>
                <header>
                <h3>Table</h3>
                </header>
                <div class="table-wrapper">
                <table class="default">
                <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>45815</td>
                <td>Something</td>
                <td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
                <td>29.99</td>
                </tr>
                <tr>
                <td>24524</td>
                <td>Nothing</td>
                <td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
                <td>19.99</td>
                </tr>
                <tr>
                <td>45815</td>
                <td>Something</td>
                <td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
                <td>29.99</td>
                </tr>
                <tr>
                <td>24524</td>
                <td>Nothing</td>
                <td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
                <td>19.99</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                <td colspan="3"></td>
                <td>100.00</td>
                </tr>
                </tfoot>
                </table>
                </div>
                </section>
                <section>
                <header>
                <h3>Form</h3>
                </header>
                <form method="post" action="#">
                <div class="row">
                <div class="6u 12u(mobilep)">
                <label for="name">Name</label>
                <input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
                </div>
                <div class="6u 12u(mobilep)">
                <label for="email">Email</label>
                <input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
                </div>
                </div>
                <div class="row">
                <div class="12u">
                <label for="subject">Subject</label>
                <input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
                </div>
                </div>
                <div class="row">
                <div class="12u">
                <label for="subject">Message</label>
                <textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
                </div>
                </div>
                <div class="row">
                <div class="12u">
                <ul class="actions">
                <li><input type="submit" value="Send" /></li>
                <li><input type="reset" value="Reset" class="alt" /></li>
                </ul>
                </div>
                </div>
                </form>
                </section>
                </div>
            -->
            
            <footer class="major container 75%">
                <h3>{{ trans('public/welcome.join') }}</h3>
            <!--<p>Inicia Sesion desde aqui.</p>-->
                <ul class="actions">
                    <li><a href="{{ url('/login') }}" class="button">{{ trans('public/welcome.join_submit') }}</a></li>
                </ul>
                <select onchange="getval(this);">
                    <option selected>Idioma</option>
                    <option value="ar">Arabe</option>
                    <option vlaue="">Chino</option>
                    <option value="es">Español</option>
                    <option value="fr">Frances</option>
                    <option value="en">Ingles</option>
                    <option value="it">Italiano</option>
                    <option value="pt-BR">Portugues</option>
                    <option value="uk">Ruso</option>
                </select>
            </footer>
            
        </div>
        
        <!-- Footer -->
        <div id="footer">
            <div class="container 75%">
                
                <header class="major last">
                    <h2>{{ trans('public/welcome.questions') }}</h2>
                </header>
                
                <p>{!! trans('public/welcome.frecuently_questions') !!}</p>
                
                                            {!! Form::open(['route' => 'preguntasycomentarios.store', 'method' => 'POST', 'files' => true]) !!}

                                            @if(session()->has('msj'))
                                            <div class="alert alert-success" role="alert">{{ session('msj')}}</div>
                                            @endif

                                            @if(session()->has('msjerror'))
                                            <div class="alert alert-danger" role="alert">{{ session('msjerror')}}</div>
                                            @endif

                                            @include('errors.errors')
                    <div class="row">
                        <div class="6u 12u(mobilep)">
                            <input type="text" name="name" placeholder="{{ trans('public/welcome.name') }}" required/>
                        </div>
                        <div class="6u 12u(mobilep)">
                            <input type="email" name="email" placeholder="{{ trans('public/welcome.email') }}" required/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <textarea name="message" placeholder="{{ trans('public/welcome.message') }}" rows="6" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="12u">
                            <ul class="actions">
                                <li><input type="submit" value="{{ trans('public/welcome.message_submit') }}" /></li>
                            </ul>
                        </div>
                    </div>
    {!! Form::close() !!}
                
                <ul class="icons">
                    <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                    <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                    <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                    <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                    <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                </ul>
                
                <ul class="copyright">
                    <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
        <script src="assets/js/main.js"></script>

        <script type="text/javascript">
            function getval(sel) {
                alert(sel.value);
                $(location).attr('href','/user/language/'+sel.value)
            }
        </script>
        
    </body>
</html>




<!--<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
<!--        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
 <!--       <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
-->