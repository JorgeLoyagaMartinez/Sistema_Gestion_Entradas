<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Fascket">
        <meta name="keywords" content="Fascket, Tickets, Entradas, Eventos">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Fascket</title>
        <link rel="shortcut icon" href="../../public/img/favicon.png" type="image/x-icon">

        <!-- Bootstrap CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
        <!-- Font Awesome CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
        <!-- jQuery -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <!-- Bootstrap JS -->
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
        <!-- Css Styles -->
        <link rel="stylesheet" href="../../public/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/elegant-icons.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/nice-select.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/jquery-ui.min.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/style.css" type="text/css">
        <link rel="stylesheet" href="../../public/css/login.css" type="text/css">
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
                <a href="index.blade.php"><img src="../../public/img/logo2.png" alt=""></a>
            </div>
            <div class="humberger__menu__cart">
                <ul>
                    <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                </ul>
                <div class="header__cart__price">item: <span>$1500.00</span></div>
            </div>
            <div class="humberger__menu__widget">
                <!--

                Lenguajes

                <div class="header__top__right__language">
                    <img src="../../public/img/language2.png" alt="">
                    <div>Español</div>
                    <span class="arrow_carrot-down"></span>
                    <ul>
                        <li><a href="#">Español</a></li>
                        <li><a href="#">Ingles</a></li>
                    </ul>
                </div> -->

                <div class="header__top__right__auth">
                    <a href="#"><i class="fa fa-user"></i> Login</a>
                </div>
            </div>
            <nav class="humberger__menu__nav mobile-menu">
                <ul>
                    <li class="active"><a href="./index.blade.php">Inicio</a></li>
                    <li><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
                    <li><a href="proximos-eventos.blade.php">Proximos Eventos</a></li>
                    <li><a href="./conocenos.blade.php">Conocenos</a></li>
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
                                <!--
                                    Lenguajes

                                <div class="header__top__right__language">
                                    <img src="../../public/img/language2.png" alt="">
                                    <div>Español</div>
                                    <span class="arrow_carrot-down"></span>
                                    <ul>
                                        <li><a href="#">Español</a></li>
                                        <li><a href="#">Ingles</a></li>
                                    </ul>
                                </div> -->
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
                            <a href="index.blade.php"><img src="../../public/img/logo2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="./index.blade.php">Inicio</a></li>
                                <li class="active"><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
                                <li><a href="proximos-eventos.blade.php">Proximos Eventos</a></li>
                                <li><a href="./conocenos.blade.php">Conocenos</a></li>
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
                                <li><a href="carrito.blade.php"><i class="fa fa-shopping-bag"></i> <span>2</span></a></li>
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

        <!-- Hero Section Begin -->
        <section class="hero hero-normal">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        <p>Todas</p>
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="Busca tu evento">
                                    <button type="submit" class="site-btn">BUSCAR</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="../../public/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Tus eventos</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.blade.php">Inicio</a>
                                <span>Eventos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Events Section Begin -->
        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="sidebar">
                            <div class="sidebar__item">
                                <h4>Department</h4>
                                <ul>
                                    <li><a href="#">Fresh Meat</a></li>
                                    <li><a href="#">Vegetables</a></li>
                                    <li><a href="#">Fruit & Nut Gifts</a></li>
                                    <li><a href="#">Fresh Berries</a></li>
                                    <li><a href="#">Ocean Foods</a></li>
                                    <li><a href="#">Butter & Eggs</a></li>
                                    <li><a href="#">Fastfood</a></li>
                                    <li><a href="#">Fresh Onion</a></li>
                                    <li><a href="#">Papayaya & Crisps</a></li>
                                    <li><a href="#">Oatmeal</a></li>
                                </ul>
                            </div>
                            <div class="sidebar__item">
                                <h4>Price</h4>
                                <div class="price-range-wrap">
                                    <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                        data-min="10" data-max="540">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    </div>
                                    <div class="range-slider">
                                        <div class="price-input">
                                            <input type="text" id="minamount">
                                            <input type="text" id="maxamount">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__item">
                                <h4>Popular Size</h4>
                                <div class="sidebar__item__size">
                                    <label for="large">
                                        Large
                                        <input type="radio" id="large">
                                    </label>
                                </div>
                                <div class="sidebar__item__size">
                                    <label for="medium">
                                        Medium
                                        <input type="radio" id="medium">
                                    </label>
                                </div>
                                <div class="sidebar__item__size">
                                    <label for="small">
                                        Small
                                        <input type="radio" id="small">
                                    </label>
                                </div>
                                <div class="sidebar__item__size">
                                    <label for="tiny">
                                        Tiny
                                        <input type="radio" id="tiny">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="filter__sort">
                                        <span>Sort By</span>
                                        <select>
                                            <option value="0">Default</option>
                                            <option value="0">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="filter__found">
                                        <h6><span>16</span> Products found</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-3">
                                    <div class="filter__option">
                                        <span class="icon_grid-2x2"></span>
                                        <span class="icon_ul"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../../public/img/product/product-1.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../../public/img/product/product-2.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../../public/img/product/product-3.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../../public/img/product/product-4.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../../public/img/product/product-5.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../../public/img/product/product-6.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#">Crab Pool Security</a></h6>
                                        <h5>$30.00</h5>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Events Section End -->

        <!-- Footer Section Begin -->
        <footer class="footer spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer__about">
                            <div class="footer__about__logo">
                                <a href="index.blade.php"><img src="../../public/img/logo2.png" alt=""></a>
                            </div>
                            <ul>
                                <li>Address: 60-49 Road 11378 New York</li>
                                <li>Phone: +65 11.188.888</li>
                                <li>Email: hello@colorlib.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                        <div class="footer__widget">
                            <h6>Links Utiles</h6>
                            <ul>
                                <li><a href="#">Protocolos Eventos</a></li>
                                <li><a href="#">Condiciones de Venta</a></li>
                                <li><a href="#">Objetos Perdidos</a></li>
                                <li><a href="#">Preguntas Frecuentes</a></li>
                                <li><a href="#">Politicas de Privacidad</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                            <ul>
                                <li><a href="#">Conocenos</a></li>
                                <li><a href="#">Servicios</a></li>
                                <li><a href="#">Para Accionistas</a></li>
                                <li><a href="#">Contactanos</a></li>
                                <li><a href="#">Tecnologia</a></li>
                                <li><a href="#">Empleos</a></li>
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
                            <div class="footer__copyright__payment"><img src="../../public/img/payment-item.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Js Plugins -->
        <script src="../../public/js/jquery-3.3.1.min.js"></script>
        <script src="../../public/js/bootstrap.min.js"></script>
        <script src="../../public/js/jquery.nice-select.min.js"></script>
        <script src="../../public/js/jquery-ui.min.js"></script>
        <script src="../../public/js/jquery.slicknav.js"></script>
        <script src="../../public/js/mixitup.min.js"></script>
        <script src="../../public/js/owl.carousel.min.js"></script>
        <script src="../../public/js/main.js"></script>
        <script src="../../public/js/like.js"></script>
        <script src="../../public/js/login.js"></script>

    </body>

</html>
