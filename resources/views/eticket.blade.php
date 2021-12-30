@extends('layout')
@section('title', 'eticket')


@section('content')
<body>


    <main>
        @foreach ($collection as $item)
            
       
        <div class="container container-eticket">
            <h2 class="text-center">¡Ya tenés tu entrada!</h2>
            <p class="text-center">Entrá a la función directamente presentando este E-Ticket digital, válido para todas las entradas compradas.</p>

            <div class="card eticket ticketcard">
                

                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <span class="sr-only">Evento:</span>
                        </div>
                        <div class="col-10">
                            <h3>La liga de la justicia</h3>
                            
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
                            <div class="fecha fechaevento" aria-label="Sábado 28 de noviembre">
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
                               
                <div class="detalle-seleccion container">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                        </div>
                        <div class="col-10">
                            Valor total por 2 entradas: <strong aria-label="80 pesos">$80</strong> <br />
                            
                        </div>
                    </div>
                </div>

                <hr aria-hidden="true">

                <img class="qr-code" src="img/qr-code.svg" alt="Código QR. Mostrá este código al personal de la sala y pasá directamente. Código alfanumérico: A136257JK">

                
            </div>
        </div>
    </main>
    @endforeach

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
