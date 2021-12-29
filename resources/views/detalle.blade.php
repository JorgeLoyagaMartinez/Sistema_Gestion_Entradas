@extends('layout')
@section('title', 'Detalles | Fascket')

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
        <section class="breadcrumb-section set-bg portada-detalle" data-setbg="{{ URL::asset($evento->portada) }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Details Section Begin -->
        <main class="main-details">
            <div class="container-fluid">
                <div class="row">
                    <div class="container event-description">
                        <h2 class="my-3" style="color: #a923ca;">{{$evento->nombre}}</h2>
                    
                        <p>
                            {{ $evento->descripcion}}
                        </p>
                        <p class="cast">
                            <strong>Categoria: </strong>{{ $evento->categoria}}
                        </p>
                    </div>
                </div>
            </div>


            <div class="title-dates">
                <h2 class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> Fechas</h2>
            </div>

            <div class="container listado">
                <select id="inputState" class="form-control">
                    <option selected aria-label="{{ $evento->fecha}}">{{ $evento->fecha}}</option>  <!--ver si va 2 veces la descripcion ...-->
                  <!--  <option aria-label="Jueves 26 de Noviembre">Jueves 26/11</option>
                    <option aria-label="Viernes 27 de Noviembre">Viernes 27/11</option>
                    <option aria-label="Sábado 28 de Noviembre">Sábado 28/11</option>
                    <option aria-label="Domingo 29 de Noviembre">Domingo 29/11</option>
                    <option aria-label="Lunes 30 de Noviembre">Lunes 30/11</option>
                    <option aria-label="Martes 1 de Diciembre">Martes 1/12</option>
                    <option aria-label="Miércoles 2 de Diciembre">Miércoles 2/12</option> -->
                </select>
            </div>
            <!-- Dates End -->

            <div class="resultados-visibles">

                <div class="nav nav-pills nav-justified" id="myTab" role="navigation">
                    <button role="button" class="nav-item nav-link active" id="horario" data-toggle="tab" href="#horarios" role="tab" aria-controls="horario" aria-selected="true">
                        Horarios disponibles
                    </button>
                </div>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="horarios" role="tabpanel" aria-labelledby="horario">
                        <div id="accordion" role="tablist">

                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a class="horarios collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                        {{ $evento->horario}} <span class="sr-only">horas</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="container container-title">
                                            <h3 class="hora text-dark">{{ $evento->horario}}<span class="sr-only">horas</span></h3>
                                        </div>
                                                <h3 class="mt-0 text-dark" > LUGAR: {{ $evento->lugar}}</h3>
                                                <p>PRECIO: {{ $evento->precio}} PESOS</p>
                                                <a href="{{ route('carrito') }}" class="primary-btn" >
                                                    
                                                    <button type="submit" class="site-btn">AGREGAR AL CARRITO</button>
                                                        </a>
                                                <!--<i class="fa fa-angle-right"></i>-->
                                            </div>
                                        </a>
                                       <!-- <a href="seleccion.html" class="media" aria-label="Cinemark Puerto Madero. Subtitulada 2D.">
                                            <img class="mr-3" src="img/logo-cinemark.png" alt="Cinemark Puerto Madero" aria-hidden="true">
                                            <div class="media-body" aria-hidden="true">
                                                <h3 class="mt-0">Cinemark Puerto Madero</h3>
                                                <p>Subtitulada 2D</p>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </a>
                                        <div class="container container-title">
                                            <h3 class="hora">21:35 <span class="sr-only">horas</span></h3>
                                        </div>
                                        <a href="seleccion.html" class="media" aria-label="Cinemark Caballito. Subtitulada 2D.">
                                            <img class="mr-3" src="img/logo-cinemark.png" alt="Cinemark Caballito" aria-hidden="true">
                                            <div class="media-body" aria-hidden="true">
                                                <h3 class="mt-0">Cinemark Caballito</h3>
                                                <p>Subtitulada 2D</p>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </a>-->
                                    </div>
                                </div>
                            </div>

                           <!-- <div class="card">
                                <div class="card-header" role="tab" id="headingFour">
                                    <a class="horarios collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        22:00 <span class="sr-only">horas</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="container container-title">
                                            <h3 class="hora">22:10 <span class="sr-only">horas</span></h3>
                                        </div>
                                        <a href="seleccion.html" class="media" aria-label="Village Caballito. Subtitulada 2D.">
                                            <img class="mr-3" src="img/logo-village.png" alt="Village Caballito" aria-hidden="true">
                                            <div class="media-body" aria-hidden="true">
                                                <h3 class="mt-0">Village Caballito</h3>
                                                <p>Subtitulada 2D</p>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" role="tab" id="headingFive">
                                    <a class="horarios collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        23:00 <span class="sr-only">horas</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="container container-title">
                                            <h3 class="hora">23:45 <span class="sr-only">horas</span></h3>
                                        </div>
                                        <a href="seleccion.html" class="media" aria-label="Cinemark Caballito. Subtitulada 2D.">
                                            <img class="mr-3" src="img/logo-cinemark.png" alt="Cinemark Caballito" aria-hidden="true">
                                            <div class="media-body" aria-hidden="true">
                                                <h3 class="mt-0">Cinemark Caballito</h3>
                                                <p>Subtitulada 2D</p>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Details Section End -->
        @endsection
