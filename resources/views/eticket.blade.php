@extends('layout')
@section('title', 'eticket')


@section('content')
<body>
    <nav class="navbar sticky-top navbar-dark bg-primary">

        <a role="button" class="btn-back" href="#" onclick="window.history.go(-1); return false;" aria-label="Volver">
            <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
        </a>

        <h1 class="navbar-brand">Tu E-ticket</h1>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a role="button" class="nav-link" href="home.html" aria-label="Inicio">
                    <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a role="button" class="nav-link" href="perfil-logueado.html" aria-label="Perfil">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <div class="tooltip-ticket">
                El E-Ticket se guardó en tu perfil
            </div>
        </ul>
    </nav>

    <main>
        <div class="container container-eticket">
            <h2 class="text-center">¡Es hora de la película!</h2>
            <p class="text-center">Entrá a la sala directamente presentando este E-Ticket digital, válido para todas las entradas compradas.</p>

            <div class="card eticket">
                <div class="fanart">
                    <img src="img/la-liga-de-la-justicia.jpg" alt="Se ve a los 5 superhéroes de la liga">
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <span class="sr-only">Película: </span>
                        </div>
                        <div class="col-10">
                            <h3>La liga de la justicia</h3>
                            <small>Subtitulada 2D</small>
                        </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="sr-only">Cine: </span>
                        </div>
                        <div class="col-10">
                            <h3>Hoyts Abasto</h3>
                            <small>Av. Corrientes 3247, CABA</small>
                        </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span class="sr-only">Fecha: </span>
                        </div>
                        <div class="col-5">
                            <div class="fecha" aria-label="Sábado 28 de noviembre">
                                Sábado 28/11
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="sr-only">Horario: </span>
                        </div>
                        <div class="col-3">
                            <div class="horario">
                                21:15 <span class="sr-only">horas.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a role="button" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=MGpyMmtoZzhqM3RxaTlvOGt0ZGliamlmNnEgbWFoZWVmdnVpazU4bGJsZ3FvZmFhOWtlNmdAZw&tmsrc=maheefvuik58lblgqofaa9ke6g%40group.calendar.google.com" class="btn btn-link">+ Agregar a mi calendario</a>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-braille" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            <div class="eleccion-butacas">
                                <span class="sr-only">Butacas</span>  4 y 5. Fila G. Sala 2
                            </div>
                        </div>
                    </div>
                </div>

                <hr aria-hidden="true">

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            Valor total por 2 entradas: <strong aria-label="80 pesos">$80</strong> <br />
                            <small>Con beneficio Club La Nación <span aria-label="2 por 1"></span> 2x1</small>
                        </div>
                    </div>
                </div>

                <hr aria-hidden="true">

                <img class="qr-code" src="img/qr-code.svg" alt="Código QR. Mostrá este código al personal de la sala y pasá directamente. Código alfanumérico: A136257JK">

                <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="#" class="btn btn-link"><i class="fa fa-share" aria-hidden="true"></i> Compartir</a>
                    <a href="#" class="btn btn-link"><i class="fa fa-download" aria-hidden="true"></i> Descargar</a>
                </div>
            </div>
        </div>

        <div class="container">
            <a role="button" href="https://www.google.com.ar/maps/dir/Universidad+Tecnol%C3%B3gica+Nacional+-+Dpto+Ingenier%C3%ADa+Electr%C3%B3nica+-+UTN.BA,+Av.+Medrano+951,+C1190+CABA/Hoyts+Abasto,+Abasto+Shopping,+C1193AAE,+Av.+Corrientes+3247,+1193+CABA/@-34.6013499,-58.4201661,16z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x95bcca7cd5154d8f:0xceff1f97c5c94a26!2m2!1d-58.4199772!2d-34.5986601!1m5!1m1!1s0x95bcca8c8513598b:0x89b570ec39dc7d88!2m2!1d-58.4108358!2d-34.6034662!3e2?hl=en" class="btn btn-primary btn-block">Cómo llegar</a>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

    <script type="text/javascript">
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
@endsection
