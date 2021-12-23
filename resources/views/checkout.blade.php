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

        <h1 class="navbar-brand">Seleccionar medio de pago</h1>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a role="button" class="nav-link" href="home.html" aria-label="Inicio">
                    <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a role="button" class="nav-link" href="perfil.html" aria-label="Perfil">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="checkout">
            <div class="listado">
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <span class="sr-only">Película: </span>
                        </div>
                        <div class="col-11">
                            <h2>La liga de la justicia</h2>
                            <small>Subtitulada 2D</small>
                        </div>
                    </div>
                </div>
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="sr-only">Cine: </span>
                        </div>
                        <div class="col-11">
                            <h2>Hoyts Abasto</h2>
                            <small>Av. Corrientes 3247, CABA</small>
                        </div>
                    </div>
                </div>
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span class="sr-only">Fecha: </span>
                        </div>
                        <div class="col-5">
                            <div class="fecha">
                                sábado 20/11
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="sr-only">Horario: </span>
                        </div>
                        <div class="col-5">
                            <div class="horario">
                                21:15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-braille" aria-hidden="true"></i>
                        </div>
                        <div class="col-11">
                            4 y 5. Fila G. Sala 2
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de beneficios -->
            <div class="container container-title">
                <label for="inputState">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        </div>
                        <div class="col-11">
                            <h3>Tarjeta de beneficios</h3>
                        </div>
                    </div>
                </label>
            </div>

            <div class="container listado">
                <select id="inputState" class="form-control">
                    <option selected aria-label="Club la Nación 2 por 1">Club La Nación 2x1</option>
                    <option aria-label="Clarin tres seis cinco 2 por 1">Clarin 365 2x1</option>
                    <option aria-label="Club Personal 2 por 1">Club Personal 2x1</option>
                    <option aria-label="Cablevisión Clientes 2 por 1">Cablevisión Clientes 2x1</option>
                </select>
            </div>

            <div class="container listado">
                <label for="InputName">Número de Tarjeta de Beneficios</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Ej.: 1234 5678 9012 3456" aria-label="Ej.: 1234 5678 9012 3456" aria-describedby="basic-addon2">
                </div>
            </div>

            <!-- Valor de las entradas -->
            <div class="container container-title">
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                    </div>
                    <div class="col-11">
                        <h3>Valor de cada entrada</h3>
                    </div>
                </div>
            </div>

            <!-- Valor con o sin beneficio -->
            <div class="container listado">
                <div class="row">
                    <div class="col-9">
                        <span aria-label="Con Club La Nación 2 por 1">Con Club La Nación 2x1</span>
                    </div>
                    <div class="col-3 text-right">
                        <strong class="precio" aria-label="80 pesos">$80</strong>
                    </div>
                </div>
            </div>

            <!-- Medios de pago-->
            <div class="container container-title">
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                    <div class="col-11">
                        <h3>Medios de pago</h3>
                    </div>
                </div>
            </div>

            <div class="listado">
                <div class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <a class="nav-item nav-link active" id="horario" data-toggle="tab" href="#credito" role="tab" aria-controls="credito" aria-selected="true">Tarjeta de Crédito</a>
                    <a class="nav-item nav-link" id="cercania" data-toggle="tab" href="#debito" role="tab" aria-controls="debito" aria-selected="false">Tarjeta de Débito</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="credito" role="tabpanel" aria-labelledby="credito">
                        <div class="card-body">
                            <div class="container container-tarjetas">
                                <form class="register">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="InputName">Número de Tarjeta de Crédito</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Ej.: 1234 5678 9012 3456" aria-describedby="basic-addon2">
                                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-inline">
                                            <div class="col form-group">
                                                <div class="row">
                                                    <label for="Code">Código de seguridad</label>
                                                    <input type="number" class="form-control" id="Code" aria-describedby="emailHelp" placeholder="Ej.: 543">
                                                </div>
                                            </div>
                                            <span class="col" data-toggle="tooltip">¿Dónde está el código? últimos 3 o 4 números del dorso de la tarjeta.</span>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"><small>Quiero usar estos datos para futuras compras</small>
                                            </label>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="debito" role="tabpanel" aria-labelledby="debito">
                        <div class="card-body">
                            <div class="container container-tarjetas">
                                <form class="register">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="InputName">Número de Tarjeta de Débito</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Ej.: 1234 5678 9012 3456" aria-describedby="basic-addon2">
                                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-inline">
                                            <div class="col form-group">
                                                <div class="row">
                                                    <label for="Code">Código de seguridad</label>
                                                    <input type="number" class="form-control" id="Code" aria-describedby="emailHelp" placeholder="Ej.: 543">
                                                </div>
                                            </div>
                                            <span class="col" data-toggle="tooltip">¿Dónde está el código? últimos 3 o 4 números del dorso de la tarjeta.</span>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"><small>Quiero usar estos datos para futuras compras</small>
                                            </label>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container container-title">
                <a role="button" href="eticket.html" class="btn btn-primary btn-block">Confirmar compra</a>
                <a role="button" href="#" class="btn btn-outline-primary btn-block" onclick="window.history.go(-1); return false;">Cancelar</a>
            </div>
        </div>

    </main>

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


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>