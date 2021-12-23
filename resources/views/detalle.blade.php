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
        <section class="breadcrumb-section set-bg" data-setbg="{{ URL::asset('img/hero/hola.jpeg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="breadcrumb__text">
                            <h2 style="color: #a923ca;">Bandalos Chinos</h2>
                            <div class="breadcrumb__option">
                                <a href="{{ route('inicio') }}">Inicio</a>
                                <span>Detalle</span>
                            </div>
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
                        <p>
                            <strong>Bandalos Chinos</strong> (sin acento), es una banda oriunda de Beccar, provincia de Buenos Aires, formada en el año 2009. El bastión principal que toman los integrantes es el rock y el pop, evolucionando con otros ritmos como el funk y el electro.
                            Su álbum debut, titulado "Bandalos Chinos" fue presentado en el Auditorium San Isidro, le valió una excelente recepción en el ámbito under, teniendo la oportunidad de tocar con otros grupos como Surﬁstas del Sistema, Desper-tar Antoles, Silvestre y La Naranja, Mompox y Santos Wussies, entre otros. Sale al mercado en 2012.
                        </p>
                        <p class="cast">
                            <strong>Compuesta por: </strong> Goyo Degano,Mati Verduga,Nicolas Rodriguez,Iñaki Colombo, Salvador Colombo</span><br />
                            <strong>Género: </strong>Indie,Funk
                        </p>
                    </div>
                </div>
            </div>


            <div class="title-dates">
                <h2 class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> Fechas</h2>
            </div>

            <div class="container listado">
                <select id="inputState" class="form-control">
                    <option selected aria-label="Sábado 28 de Noviembre">Sábado 28/11</option>
                    <option aria-label="Jueves 26 de Noviembre">Jueves 26/11</option>
                    <option aria-label="Viernes 27 de Noviembre">Viernes 27/11</option>
                    <option aria-label="Sábado 28 de Noviembre">Sábado 28/11</option>
                    <option aria-label="Domingo 29 de Noviembre">Domingo 29/11</option>
                    <option aria-label="Lunes 30 de Noviembre">Lunes 30/11</option>
                    <option aria-label="Martes 1 de Diciembre">Martes 1/12</option>
                    <option aria-label="Miércoles 2 de Diciembre">Miércoles 2/12</option>
                </select>
            </div>
            <!-- Dates End -->

            <div class="resultados-visibles">

                <div class="nav nav-pills nav-justified" id="myTab" role="navigation">
                    <button role="button" class="nav-item nav-link active" id="horario" data-toggle="tab" href="#horarios" role="tab" aria-controls="horario" aria-selected="true">
                        Ordenar por horario
                    </button>
                </div>


                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="horarios" role="tabpanel" aria-labelledby="horario">
                        <div id="accordion" role="tablist">

                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <a class="horarios collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        21:00 <span class="sr-only">horas</span>
                                        <i class="fa fa-angle-down"></i>
                                    </a>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        <div class="container container-title">
                                            <h3 class="hora">21:15 <span class="sr-only">horas</span></h3>
                                        </div>
                                        <a href="seleccion.html" class="media" aria-label="Hoyts Abasto. Subtitulada 2D.">
                                            <img class="mr-3" src="img/logo-hoyts.jpg" alt="Hoyts Abasto" aria-hidden="true">
                                            <div class="media-body" aria-hidden="true">
                                                <h3 class="mt-0">Hoyts Abasto</h3>
                                                <p>Subtitulada 2D</p>
                                                <i class="fa fa-angle-right"></i>
                                            </div>
                                        </a>
                                        <a href="seleccion.html" class="media" aria-label="Cinemark Puerto Madero. Subtitulada 2D.">
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
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Details Section End -->
        @endsection
