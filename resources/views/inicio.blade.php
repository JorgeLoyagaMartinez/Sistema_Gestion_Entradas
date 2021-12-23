@extends('layout')
@section('title', 'Fascket')
@section('inicio', 'active')

        @section('content')
        <!-- Main Banner Section Begin -->
        {{-- @forelse ($eventos as $evento)
                <div class="card m-2" style="width: 18rem;">
                    <img src={{ $evento->portada}} class="card-img-top" alt={{ $evento->nombre }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $evento->nombre }}</h5>
                        <p class="card-text">{{ $evento->descripcion }}</p>
                        <a href="{{ route('eventos.show', $evento)}}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
                @empty
                <p>No hay resultados para la búsqueda</p>
        @endforelse --}}
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="hero__item set-bg" data-setbg="{{ URL::asset('img/hero/hola.jpeg') }}">
                        <div class="hero__text">
                            <span>EN VIVO EN EL HIPODROMO<br />DE SAN ISIDRO</span>
                            <h2>BANDALOS<br />CHINOS</h2>
                            <p>ULTIMAS ENTRADAS DISPONIBLES</p>
                            <a href="{{ route('detalle') }}" class="primary-btn">COMPRA AHORA</a>
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
                                            <div class="categories__item set-bg" data-setbg="{{ URL::asset('img/categories/cat-1.jpg') }}">
                                                <h5><a href="{{ route('detalle') }}"></a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="{{ URL::asset('img/categories/cat-2.jpg') }}">
                                                <h5><a href="{{ route('detalle') }}">Nueva Generacion</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="{{ URL::asset('img/categories/cat-3.jpg') }}">
                                                <h5><a href="{{ route('detalle') }}">Recomendaciones</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="{{ URL::asset('img/categories/cat-4.jpg') }}">
                                                <h5><a href="{{ route('detalle') }}">Merchandising</a></h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="categories__item set-bg" data-setbg="{{ URL::asset('img/categories/cat-5.jpg') }}">
                                                <h5><a href="{{ route('detalle') }}">Menues</a></h5>
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
                            <a href="{{ route('detalle') }}">
                                <img src="{{ URL::asset('img/hero/1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <a href="{{ route('detalle') }} ">
                                <img src="{{ URL::asset('img/hero/2.png') }}" alt="">
                            </a>
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
                                <img src="{{ URL::asset('img/blog/blog-1.jpg') }}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">Justin Bieber en Argentina</a></h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae sint, saepe, provident soluta blanditiis odit minus delectus quia, cumque ratione dolores neque numquam quidem totam amet exercitationem iusto dolore placeat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ URL::asset('img/blog/blog-2.jpg') }}" alt="">
                            </div>
                            <div class="blog__item__text">
                                <h5><a href="#">Se viene el Cosquin Rock</a></h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae sint, saepe, provident soluta blanditiis odit minus delectus quia, cumque ratione dolores neque numquam quidem totam amet exercitationem iusto dolore placeat. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="blog__item">
                            <div class="blog__item__pic">
                                <img src="{{ URL::asset('img/blog/blog-3.jpg') }}" alt="">
                            </div>
                            <div class="blog__item__text">
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
