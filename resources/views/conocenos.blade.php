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
                                <li><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
                                <li><a href="proximos-eventos.blade.php">Proximos Eventos</a></li>
                                <li class="active"><a href="./conocenos.blade.php">Conocenos</a></li>
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

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="../../public/img/breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Conocenos</h2>
                            <div class="breadcrumb__option">
                                <a href="./index.blade.php">Inicio</a>
                                <span>Conocenos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Contact Section Begin -->
        <section class="contact spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_phone"></span>
                            <h4>Telefono</h4>
                            <p>+51-3-8888-6868</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_pin_alt"></span>
                            <h4>Direccion</h4>
                            <p>60-49 Road 11378 New York</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_clock_alt"></span>
                            <h4>Horario</h4>
                            <p>10:00 am to 23:00 pm</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                        <div class="contact__widget">
                            <span class="icon_mail_alt"></span>
                            <h4>Email</h4>
                            <p>fascket@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section End -->

        <!-- Map Begin -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49116.39176087041!2d-86.41867791216099!3d39.69977417971648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886ca48c841038a1%3A0x70cfba96bf847f0!2sPlainfield%2C%20IN%2C%20USA!5e0!3m2!1sen!2sbd!4v1586106673811!5m2!1sen!2sbd"
                height="500" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="map-inside">
                <i class="icon_pin"></i>
                <div class="inside-widget">
                    <h4>New York</h4>
                    <ul>
                        <li>Phone: +12-345-6789</li>
                        <li>Add: 16 Creek Ave. Farmingdale, NY</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Map End -->

        <!-- Contact Form Begin -->
        <div class="contact-form spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="contact__form__title">
                            <h2>Contactanos!</h2>
                        </div>
                    </div>
                </div>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <input type="text" placeholder="Tu nombre">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input type="text" placeholder="Tu Email">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea placeholder="Tu mensaje"></textarea>
                            <button type="submit" class="site-btn">ENVIAR MENSAJE</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Contact Form End -->

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
