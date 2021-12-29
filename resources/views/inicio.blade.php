@extends('layout')
@section('title', 'Fascket')
@section('inicio', 'active')
        @section('content')
        <!-- Main Banner Section Begin -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 p-5 bg-white" style="padding: 0px" data-setbg="{{ URL::asset('img/hero/hola.jpeg') }}">
                        <div class="hero__text my-5">
                            <span>EN VIVO EN EL HIPODROMO<br />DE SAN ISIDRO</span>
                            <h2>BANDALOS<br />CHINOS</h2>
                            <p>ULTIMAS ENTRADAS DISPONIBLES</p>
                            <a href="" class="primary-btn">COMPRA AHORA</a>
                        </div>
                    </div>
                    <div class="col-lg-9" style="padding: 0px" >
                        <img src="{{ URL::asset('img/hero/chabones.png') }}" alt="">
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
                                <form action="{{ route("tus-eventos") }}" method="GET">
                                    <div class="hero__search__categories">
                                        <p>Todas</p>
                                        <span class="arrow_carrot-down"></span>
                                    </div>
                                    <input type="text" id="nombre" aria-describedby="search" name='nombre' placeholder="Busca tu evento">
                                    <button type="submit" class="site-btn">BUSCAR</button>
                                </form>
                            </div>
                        </div>
                        <section class="categories">
                            <div class="container">
                                <div class="row">
                                    <div class="categories__slider owl-carousel">
                                        @foreach ($eventos as $item)
                                                <div class="col-lg-3">
                                                    <div class="categories__item set-bg" data-setbg="{{ $item->portada }}">
                                                        <h5><a href="{{ route("eventos.show", $item) }}">{{ $item->nombre }}</a></h5>
                                                    </div>
                                                </div>
                                        @endforeach
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
                            <a href="">
                                <img src="{{ URL::asset('img/hero/1.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="banner__pic">
                            <a href="">
                                <img src="{{ URL::asset('img/hero/2.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Banner End -->
        @endsection
