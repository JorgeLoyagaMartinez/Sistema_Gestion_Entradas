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
                            <span>EN VIVO EN {{ $destacado->lugar }}</span>
                            <h2> {{ $destacado->nombre }}</h2>
                            <p>ULTIMAS ENTRADAS DISPONIBLES</p>
                            <a class="primary-btn" href="{{ route("eventos.show", $destacado) }}">COMPRA AHORA</a>
                        </div>
                    </div>
                    <div class="col-lg-9" style="padding: 0px" >
                        <a  href="{{ route("eventos.show", $destacado) }}"> <img src="{{ $destacado->portada }}" alt=""> </a>
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
                                                    <div class="categories__item set-bg" data-setbg="{{ $item->imagenes }}">
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
            <h2 class="prox-eventos">Proximos eventos</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="hero__text my-5 text-center">
                            <a href="{{ route("eventos.show", $destacadosAbajo[0]) }}">
                                <img src="{{ $destacadosAbajo[0]->portada }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="hero__text my-5 text-center">
                            <a href="{{ route("eventos.show", $destacadosAbajo[1]) }}">
                                <img src="{{ $destacadosAbajo[1]->portada }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Banner End -->
        @endsection
