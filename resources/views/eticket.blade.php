@extends('layout')
@section('title', 'eticket')


@section('content')
<body>


    <main>
        <div class="container container-eticket">
            <h2 style="color:#a923ca;"class="text-center">¡Ya tenés tu entrada!</h2>
            <p class="text-center">Entrá al Evento directamente presentando este E-Ticket digital, válido para todas las entradas compradas.</p>

            <div style="display:flex; justify-content:center; padding:10px; color:#000;" class="card eticket ticketcard">


                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-2">
                            <i style="font-size:32px;" class="fa fa-film" aria-hidden="true"></i>
                            <span class="sr-only">Evento:</span>
                        </div>
                        <div class="col-10">
                            <h3 style="color:#000;" class="text-dark">Bandalos Chinos</h3>

                        </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-2">
                            <i style="font-size:32px;" class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="sr-only">Lugar: </span>
                        </div>
                        <div class="col-10">
                            <h3 style="color:#000;"  class="text-dark">Hipodromo de Palermo</h3>
                            </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-2">
                            <i style="font-size:32px;" class="fa fa-calendar" aria-hidden="true"></i>
                            <span class="sr-only">Fecha: </span>
                        </div>
                        <div class="col-10">
                            <div class="fecha fechaevento" aria-label="Sábado 28 de noviembre" style="color:#000; font-weight:500;" >
                                Sábado 28/11
                            </div>
                        </div>
                        <div class="col-2">
                            <i style="font-size:32px;" class="fa fa-clock-o" aria-hidden="true"></i>

                        </div>
                        <div class="col-10">
                            <div class="horario" style="font-size: 25px" style="color:#000;" >
                                21:15 horas.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-2">
                            <i style="font-size:32px;" class="fa fa-ticket" aria-hidden="true"></i>
                        </div>
                        <div class="col-10" style="font-size: 25px" style="color:#000;" >
                            Valor total por 2 entradas: <strong aria-label="80 pesos">$4000</strong> <br />

                        </div>
                    </div>
                </div>

                <hr aria-hidden="true">

                <img class="qr-code" style="display: block; margin:10px auto; "  height="200px" width="200px"src="https://latam.kaspersky.com/content/es-mx/images/repository/isc/2020/9910/a-guide-to-qr-codes-and-how-to-scan-qr-codes-2.png" alt="Código QR. Mostrá este código al personal de la sala y pasá directamente. Código alfanumérico: A136257JK">


            </div>
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
