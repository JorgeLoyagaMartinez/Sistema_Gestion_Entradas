@extends('layout')

        @section('content')
        <!-- Main Banner Section Begin -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="hero__item set-bg" data-setbg="../../public/img/hero/hola.jpeg">
                        <div class="hero__text">
                            <span>EN VIVO EN EL HIPODROMO<br />DE SAN ISIDRO</span>
                            <h2>BANDALOS<br />CHINOS</h2>
                            <p>ULTIMAS ENTRADAS DISPONIBLES</p>
                            <a href="#" class="primary-btn">COMPRA AHORA</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="hero__search">
                            <div class="hero__search__form">
                                <form action="#">
                                    <div class="hero__search__categories">
                                        <p id="search-text">Todas</p>
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" placeholder="Busca tu evento">
                                    <button type="submit" class="site-btn">BUSCAR</button>
                                </form>
                            </div>
                        </div>
                        <section class="categories">
                            <div class="container">
                                <div class="row">
                                    <div class="categories__slider owl-carousel">
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="../../public/img/categories/cat-1.jpg">
                                                <h5><a href="detalle.blade.php">Mas Populares</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="../../public/img/categories/cat-2.jpg">
                                                <h5><a href="detalle.blade.php">Nueva Generacion</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="../../public/img/categories/cat-3.jpg">
                                                <h5><a href="detalle.blade.php">Recomendaciones</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="../../public/img/categories/cat-4.jpg">
                                                <h5><a href="detalle.blade.php">Merchandising</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="../../public/img/categories/cat-5.jpg">
                                                <h5><a href="detalle.blade.php">Menues</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </section>
        <!-- Main Banner Section End -->

        <!-- Second Banner Begin -->
        <div class="banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="../../public/img/hero/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <img src="../../public/img/hero/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Banner End -->

        <!-- Blog Section Begin -->
        <section class="from-blog spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title from-blog__title">
                            <h2>Noticias</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="../../public/img/blog/blog-1.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                            <!--
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                            -->
                                <h5><a href="#">Justin Bieber en Argentina</a></h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae sint, saepe, provident soluta blanditiis odit minus delectus quia, cumque ratione dolores neque numquam quidem totam amet exercitationem iusto dolore placeat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="../../public/img/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                            <!--
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                            -->
                                <h5><a href="#">Se viene el Cosquin Rock</a></h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae sint, saepe, provident soluta blanditiis odit minus delectus quia, cumque ratione dolores neque numquam quidem totam amet exercitationem iusto dolore placeat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="../../public/img/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="blog__item__text">
                            <!--
                                <ul>
                                    <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                    <li><i class="fa fa-comment-o"></i> 5</li>
                                </ul>
                            -->
                                <h5><a href="#">Festivales Ecofriendlies</a></h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae sint, saepe, provident soluta blanditiis odit minus delectus quia, cumque ratione dolores neque numquam quidem totam amet exercitationem iusto dolore placeat. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Section End -->
        @endsection
