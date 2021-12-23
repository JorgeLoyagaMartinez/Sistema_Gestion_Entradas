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
        <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/breadcrumb.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2>Carrito</h2>
                            <div class="breadcrumb__option">
                                <a href="{{ route('inicio') }}">Inicio</a>
                                <span>Carrito</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Shoping Cart Section Begin -->
        <section class="shoping-cart spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__table">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="shoping__product">Productos</th>
                                        <th>Precio</th>
                                        <th>Cantidad</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ URL::asset('img/cart/cart-1.jpg') }}" alt="">
                                            <h5>Vegetable’s Package</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $55.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $110.00
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ URL::asset('img/cart/cart-2.jpg') }}" alt="">
                                            <h5>Fresh Garden Vegetable</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $39.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $39.99
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img src="{{ URL::asset('img/cart/cart-3.jpg') }}" alt="">
                                            <h5>Organic Bananas</h5>
                                        </td>
                                        <td class="shoping__cart__price">
                                            $69.00
                                        </td>
                                        <td class="shoping__cart__quantity">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="shoping__cart__total">
                                            $69.99
                                        </td>
                                        <td class="shoping__cart__item__close">
                                            <span class="icon_close"></span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping__cart__btns">
                            <a href="#" class="primary-btn cart-btn">CONTINUAR COMPRANDO</a>
                            <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                Actualizar Carrito</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__continue">
                            <div class="shoping__discount">
                                <h5>Codigo de descuento</h5>
                                <form action="#">
                                    <input type="text" placeholder="Enter your coupon code">
                                    <button type="submit" class="site-btn">APLICAR CUPÓN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="shoping__checkout">
                            <h5>Total</h5>
                            <ul>
                                <li>Subtotal <span>$454.98</span></li>
                                <li>Total <span>$454.98</span></li>
                            </ul>
                            <a href="{{ route('pago') }}" class="primary-btn">IR AL PAGO</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shoping Cart Section End -->
        @endsection
