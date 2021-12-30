@extends('layout')
@section('title', 'Tus eventos | Fascket')
@section('tus-eventos', 'active')

        @section('content')
        <!-- Hero Section Begin -->
        <section class="hero hero-normal">
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
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero Section End -->

        <!-- Breadcrumb Section Begin -->
        <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/bannereventos.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Eventos</h2>
                            <div class="breadcrumb__option">
                                <a href="{{ route('inicio') }}">Inicio</a>
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
                                <h4>Género</h4>
                                <ul>
                                    <li><a href='{{ route('categorias', 'cumbia') }}'>Cumbia</a></li>
                                    <li><a href='{{ route('categorias', 'rock') }}'>Rock</a></li>
                                    <li><a href='{{ route('categorias', 'stand up') }}'>Stand Up</a></li>
                                    <li><a href='{{ route('categorias', 'pop') }}'>Pop</a></li>
                                    <li><a href='{{ route('categorias', 'reggaeton') }}'>Reggaeton</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7">
                            @if ($nombre)
                                <h3 id="search-h3">{{ 'Resultados para: ' . $nombre}}</h3>
                            @else
                                <h3 id="search-h3">Todos los eventos</h3>
                            @endif
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-4 col-md-5">
                                    <div class="filter__sort">
                                        <span>Ordenar por</span>
                                        <select>
                                            <option value="0">Default</option>
                                            <option value="0">Default</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="filter__found">
                                        <h6><span>{{  count($eventos) }}</span> Products found</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @forelse ($eventos as $evento)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $evento->imagenes }}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{ route("eventos.show", $evento) }}">{{ $evento->nombre }}</a></h6>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <p class="sin-resultados">No hay resultados</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Events Section End -->
        @endsection
