@extends('layout')
@section('title', "Pago | Fascket")

        @section('content')
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
        <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/bannereventos.png') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Pago</h2>
                            <div class="breadcrumb__optiong">
                                <a href="{{ route('inicio') }}">Inicio</a>
                                <span>Pago</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Checkout Section Begin -->
        <section class="checkout spad">
            <div class="container">

                <div class="checkout__form">
                    <h4>Informacion de pago</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Nombre/s<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Apellido<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <p>Numero de Tarjeta<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Codigo de Seguridad<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Fecha de vencimiento<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="checkout__order">
                                    <h4>Tu orden</h4>
                                    <div class="checkout__order__products">Productos <span>Total</span></div>
                                    <ul>
                                        <li>Lorem ipsum <span>$**.**</span></li>
                                        <li>Lorem ipsum  <span>$***.**</span></li>
                                        <li>Lorem ipsum  <span>$**.**</span></li>
                                    </ul>
                                    <div class="checkout__order__subtotal">Subtotal <span>$***.**</span></div>
                                    <div class="checkout__order__total">Total <span>$***.**</span></div>
                                    <a href="{{ route("eticket") }}" class="site-btn">PAGAR</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->
        @endsection
