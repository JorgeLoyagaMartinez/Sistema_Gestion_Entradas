 <!-- Page Preloder -->
 <div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="index.blade.php"><img src="../../public/img/logo2.png" alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart" onclick="showList()"></i> <span>1</span></a></li>
            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <div class="header__cart__price">item: <span>$1500.00</span></div>
    </div>
    <div class="humberger__menu__widget">
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
            <a href="#"><i class="fa fa-user"></i> Login</a>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="active"><a href="./index.blade.php">Inicio</a></li>
            <li><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
            <li><a href="proximos-eventos.blade.php">Proximos Eventos</a></li>
            <li><a href="./quienes-somos.blade.php">Conocenos</a></li>
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
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="header__top__right">
                        <!-- <div class="header__top__right__language">
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
                                adsfsdafsd
                            </div>
                        </div>





                        <!-- <div class="header__top__right__auth">
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
                                </div>
                            <!-- </div>
                            </nav>
                        </div>  -->
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
                        <li class="active"><a href="./index.blade.php">Inicio</a></li>
                        <li><a href="./tus-eventos.blade.php">Tus Eventos</a></li>
                        <li><a href="proximos-eventos.blade.php">Proximos Eventos</a></li>
                        <li><a href="./quienes-somos.blade.php">Conocenos</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart" >
                    <div class="list-like" id="div-like">
                        <button id="button-like" onclick="close()">X</button>
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
