<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Fascket">
        <meta name="keywords" content="Fascket, Tickets, Entradas, Eventos">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" type="text/css">
    </head>

    <body>

        <!-- Page Preloader -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Nav Aside Begin -->
        <div class="humberger__menu__overlay"></div>
        <div class="humberger__menu__wrapper">
            <div class="humberger__menu__logo">
                <a href="{{ route('inicio') }}"><img src="{{ URL::asset('img/logo2.png') }}" alt=""></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                    <li><a href="{{ route('carrito') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                </ul>
                <div class="header__cart__price">item: <span>$1500.00</span></div>
            </div>
            <div class="humberger__menu__widget">
                <div class="header__top__right__auth">
                    <a href="#"><i class="fa fa-user"></i> Login</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li><a href="{{ route('inicio') }}">Inicio</a></li>
                    <li><a href="{{ route('tus-eventos') }}">Tus Eventos</a></li>
                    <li><a href="{{ route('proximos-eventos') }}">Proximos Eventos</a></li>
                    <li><a href="{{ route('conocenos') }}">Conocenos</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
            <div class="humberger__menu__contact">
                <ul>
                    <li><i class="fa fa-envelope"></i> soporte@fascket.com</li>
                    <li>Hacenos tus consultas</li>
                </ul>
            </div>
        </div>
        <!-- Nav Aside End -->

        <!-- Header Section Begin -->
        <header class="header">
            <div class="header__top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-6">
                            <div class="header__top__right">
                                <div id="login">
                                    <div class="dropdown">
                                        <button onclick="showLogin()">Login</button>
                                    </div>
                                    <div id="login-div">
                                        <button onclick="closeLogin()" class="close">X</button>
                                        <div class="container-login">
                                            <h3>Login Via</h3>
                                            <div class="social-buttons">
                                                <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                            </div>
                                            <p>Or</p>
                                            <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                    <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox">
                                                    <label>keep me logged-in</label>
                                                </div>
                                            </form>
                                            <div class="bottom text-center">
                                                <p>New here ?</p> <a href="#"><b>Join Us</b></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header__logo">
                            <a href="{{ route('inicio') }}"><img src="{{ URL::asset('img/logo2.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li class="@yield('inicio')"><a href="{{ route('inicio') }}">Inicio</a></li>
                                <li class="@yield('tus-eventos')"><a href="{{ route('tus-eventos') }}">Tus Eventos</a></li>
                                <li class="@yield('proximos-eventos')"><a href="{{ route('proximos-eventos') }}">Proximos Eventos</a></li>
                                <li class="@yield('conocenos')"><a href="{{ route('conocenos') }}">Conocenos</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="header__cart" >
                            <div class="list-like" id="div-like">
                                <button id="button-like" onclick="closeList()">X</button>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa fa-heart" onclick="showList()"></i> <span>1</span></a></li>
                                <li><a href="{{ route('carrito') }}"><i class="fa fa-shopping-bag"></i> <span>2</span></a></li>
                            </ul>
                            <div class="header__cart__price">item: <span>$1500.00</span></div>
                        </div>
                    </div>
                </div>
                <div class="humberger__open">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </header>
        <!-- Header Section End -->

        @yield('content')

        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="{{ route('inicio') }}"><img src="{{ URL::asset('img/logo2.png') }}" alt=""></a>
                            </div>
                            <ul>
                                <li>Dirección: Calle 123 Buenos Aires</li>
                                <li>Telefono: 0800-888-888</li>
                                <li>Email: Fascket@soporte.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Links Utiles</h6>
                            <ul>
                                <li><a href="{{ route('inicio') }}">Inicio</a></li>
                                <li><a href="{{ route('tus-eventos') }}">Tus Eventos</a></li>
                                <li><a href="{{ route('proximos-eventos') }}">Proximos Eventos</a></li>
                                <li><a href="{{ route('conocenos') }}">Conocenos</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__widget">
                            <h6>Enterate de todo!</h6>
                            <p>Promociones, eventos en tu area y mucho mas!</p>
                            <form action="#">
                                <input type="text" placeholder="Escribi tu mail">
                                <button type="submit" class="site-btn">Suscribirse</button>
                            </form>
                            <div class="footer__widget__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer__copyright">
                            <div class="footer__copyright__text">
                                <p>
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | De Argentina con amor por <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://fascket-clientes.com" target="_blank">Fascket</a>
                                </p>
                            </div>
                            <div class="footer__copyright__payment"><img src="{{ URL::asset('img/payment-item.png') }}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('js/jquery.slicknav.js') }}"></script>
        <script src="{{ URL::asset('js/mixitup.min.js') }}"></script>
        <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('js/main.js') }}"></script>
        <script src="{{ URL::asset('js/like.js') }}"></script>
        <script src="{{ URL::asset("js/login.js") }}"></script>

    </body>

</html>