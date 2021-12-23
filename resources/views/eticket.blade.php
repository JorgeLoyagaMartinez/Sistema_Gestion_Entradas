<!DOCTYPE html>
<html lang="es-AR">
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


    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="../img/logo2.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$1500.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language2.png" alt="">
                <div>Español</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">Ingles</a></li>
                </ul>
            </div>

            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="./index.blade.php">Inicio</a></li>
                <li class="active"><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
                <li><a href="proximos-eventos.blade.php">Proximos</a></li>
                <li><a href="./contact.blade.php">Conocenos</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> soporte@fascket.com</li>
                <li>Hacenos tus consultas</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__language">
                                <img src="../../public/img/language2.png" alt="">
                                <div>Español</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Español</a></li>
                                    <li><a href="#">Ingles</a></li>
                                </ul>
                            </div>

                            <div class="header__top__right__auth">
                                <a href="#"></i>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b></a>
                                            <ul id="login-dp" class="dropdown-menu">
                                                <li>
                                                    <div class="row">
                                                            <div class="container-fluid">
                                                                Login via
                                                                <div class="social-buttons">
                                                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                                                </div>
                                                                or
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
                                                                            <label>
                                                                            <input type="checkbox"> keep me logged-in
                                                                            </label>
                                                                        </div>
                                                                </form>
                                                            </div>
                                                            <div class="bottom text-center">
                                                                New here ? <a href="#"><b>Join Us</b></a>
                                                            </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                                </nav>
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
                        <a href="./index.html"><img src="../../public/img/logo2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.blade.php">Inicio</a></li>
                            <li><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
                            <li><a href="proximos-eventos.blade.php">Proximos</a></li>
                            <li><a href="./quienes-somos.blade.php">Quienes Somos</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart" >
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span></span></a></li>
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
<body>
    <nav class="navbar sticky-top navbar-dark bg-primary">

        <a role="button" class="btn-back" href="#" onclick="window.history.go(-1); return false;" aria-label="Volver">
            <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
        </a>

        <h1 class="navbar-brand">Tu E-ticket</h1>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a role="button" class="nav-link" href="home.html" aria-label="Inicio">
                    <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a role="button" class="nav-link" href="perfil-logueado.html" aria-label="Perfil">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <div class="tooltip-ticket">
                El E-Ticket se guardó en tu perfil
            </div>
        </ul>
    </nav>

    <main>
        <div class="container container-eticket">
            <h2 class="text-center">¡Es hora de la película!</h2>
            <p class="text-center">Entrá a la sala directamente presentando este E-Ticket digital, válido para todas las entradas compradas.</p>

            <div class="card eticket">
                <div class="fanart">
                    <img src="img/la-liga-de-la-justicia.jpg" alt="Se ve a los 5 superhéroes de la liga">
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <span class="sr-only">Película: </span>
                        </div>
                        <div class="col-10">
                            <h3>La liga de la justicia</h3>
                            <small>Subtitulada 2D</small>
                        </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="sr-only">Cine: </span>
                        </div>
                        <div class="col-10">
                            <h3>Hoyts Abasto</h3>
                            <small>Av. Corrientes 3247, CABA</small>
                        </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span class="sr-only">Fecha: </span>
                        </div>
                        <div class="col-5">
                            <div class="fecha" aria-label="Sábado 28 de noviembre">
                                Sábado 28/11
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="sr-only">Horario: </span>
                        </div>
                        <div class="col-3">
                            <div class="horario">
                                21:15 <span class="sr-only">horas.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a role="button" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MGpyMmtoZzhqM3RxaTlvOGt0ZGliamlmNnEgbWFoZWVmdnVpazU4bGJsZ3FvZmFhOWtlNmdAZw&tmsrc=maheefvuik58lblgqofaa9ke6g%40group.calendar.google.com" class="btn btn-link">+ Agregar a mi calendario</a>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-braille" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            <div class="eleccion-butacas">
                                <span class="sr-only">Butacas</span>  4 y 5. Fila G. Sala 2
                            </div>
                        </div>
                    </div>
                </div>

                <hr aria-hidden="true">

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            Valor total por 2 entradas: <strong aria-label="80 pesos">$80</strong> <br />
                            <small>Con beneficio Club La Nación <span aria-label="2 por 1"></span> 2x1</small>
                        </div>
                    </div>
                </div>

                <hr aria-hidden="true">

                <img class="qr-code" src="img/qr-code.svg" alt="Código QR. Mostrá este código al personal de la sala y pasá directamente. Código alfanumérico: A136257JK">

                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-link"><i class="fa fa-share" aria-hidden="true"></i> Compartir</a>
                    <a href="#" class="btn btn-link"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
                </div>
            </div>
        </div>

        <div class="container">
            <a role="button" href="https://www.google.com.ar/maps/dir/Universidad+Tecnol%C3%B3gica+Nacional+-+Dpto+Ingenier%C3%ADa+Electr%C3%B3nica+-+UTN.BA,+Av.+Medrano+951,+C1190+CABA/Hoyts+Abasto,+Abasto+Shopping,+C1193AAE,+Av.+Corrientes+3247,+1193+CABA/@-34.6013499,-58.4201661,16z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x95bcca7cd5154d8f:0xceff1f97c5c94a26!2m2!1d-58.4199772!2d-34.5986601!1m5!1m1!1s0x95bcca8c8513598b:0x89b570ec39dc7d88!2m2!1d-58.4108358!2d-34.6034662!3e2?hl=en" class="btn btn-primary btn-block">Cómo llegar</a>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
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
                        <div class="footer__copyright__text"><p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | De Argentina con amor por <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://fascket-clientes.com" target="_blank">Fascket</a>
  </p></div>
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

</body>

</body>

</html>
