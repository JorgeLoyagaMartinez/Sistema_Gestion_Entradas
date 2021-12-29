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
                            <div class="breadcrumb__option">
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
                    <h4>Registro Usuario</h4>
                    <form action="{{ route('usuarios.store') }}" method="POST" autocomplete="off" id="pago" >
                        @csrf
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <!--<p>Nombre/s<span>*</span></p>-->
                                            <label for="nombre" id="form-label">NOMBRE</label>
                                            <input type="text" id="form-control" id="nombre" name='nombre' placeholder="Nombre del Usuario" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <!--<p>Apellido<span>*</span></p>-->
                                            <label for="apellido" id="form-label">APELLIDO</label>
                                            <input type="text" id="form-control" id="apellido" name="apellido" placeholder="Apellido del Usuario" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input">
                                    <!--<p>País<span>*</span></p>-->
                                    <label for="pais" id="form-label">PAIS</label>
                                    <input type="text" id="form-control" id="pais" name="pais" placeholder="Pais de Residencia" autocomplete="off" required>
                                </div>
                                <div class="checkout__input">
                                    <!--<p>Dirección<span>*</span></p>-->
                                    <label for="direccion" id="form-label">DIRECCION</label>
                                    <input type="text" id="form-control" id="direccion" name="direccion" autocomplete="off" required>

                                </div>
                                <div class="checkout__input">
                                    <!--<p>Ciudad<span>*</span></p>-->
                                    <label for="ciudad" id="form-label">CIUDAD</label>
                                    <input type="text" id="form-control" id="ciudad" name="ciudad" autocomplete="off" required>
                                </div>
                                <div class="checkout__input">
                                    <!--<p>Provincia<span>*</span></p>-->
                                    <label for="provincia" id="form-label">PROVINCIA</label>
                                    <input type="text" id="form-control" id="provincia" name="provincia" autocomplete="off" required>
                                </div>
                                <div class="checkout__input">
                                    <!--<p>Código Postal<span>*</span></p>-->
                                    <label for="codigo postal" id="form-label">CODIGO POSTAL</label>
                                    <input type="text" id="form-control" id="codigo postal" name="codigo postal" autocomplete="off" required>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <!--<p>TELEFONO<span>*</span></p>-->
                                            <label for="telefono" id="from-label">TELEFONO</label>
                                            <input type="text" id="form-control" id="telefono" name="telefono" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <!--<p>Email<span>*</span></p>-->
                                            <label for="mail" id="form-label">EMAIL</label>
                                            <input type="text" id="form-control" id="mail" name="mail" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc">
                                        Crear una cuenta?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Crear una cuenta para recibir más información. Si tú regresas a esta página por favor inicia sesión</p>
                                <div class="checkout__input">
                                    <!--<p>Contraseña<span>*</span></p>-->
                                    <label for="password" id="form-label">CONTRASEÑA</label>
                                    <input type="password" id="form-control" id="password" name="password" autocomplete="off" required>
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
                                    <div class="checkout__input__checkbox">
                                        <label for="acc-or">
                                            Crear una cuenta?
                                            <input type="checkbox" id="acc-or">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="site-btn">PAGAR</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Checkout Section End -->
        @endsection
