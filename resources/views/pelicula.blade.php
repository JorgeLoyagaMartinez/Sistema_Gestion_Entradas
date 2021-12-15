<!DOCTYPE html>
<html lang="es-AR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Tracker</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700" rel="stylesheet">
  <script src="https://use.fontawesome.com/a89bf0eb2b.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css"
  integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ=="
  crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"
   integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log=="
   crossorigin=""></script> 
   <script src='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
   <link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet'/>

  <link rel="stylesheet" href="css/app.css">
</head>
<body>
    <nav class="navbar sticky-top navbar-dark bg-primary">

        <a role="button" class="btn-back" href="#" onclick="window.history.go(-1); return false;" aria-label="Volver">
            <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
        </a>

        <h1 class="navbar-brand">Seleccionar Lugar</h1>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a role="button" class="nav-link" href="home.html" aria-label="Inicio">
                    <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item">
                <a role="button" class="nav-link" href="perfil.html" aria-label="Perfil">
                    <i class="fa fa-user fa-2x" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>

    <main>
        <div class="container-fluid">
            <div class="row">
                <div class="fanart">
                    <div class="container">
                        <h2>Soda Stereo</h2>
                    </div>
                    <img src="img/la-liga-de-la-justicia.jpg" alt="Se ve a los 5 superhéroes de la liga">
                </div>

                <div class="container movie-description">
                    <p>Motivado por su renovada fe en la humanidad e inspirado por el acto abnegado de <span lang="en">Superman</span>, <span lang="en">Bruce Wayne</span> une fuerzas con su nueva aliada, <span lang="en">Diana Prince</span>, para enfrentar a un enemigo más amenazador.</p>
                    <div class="collapse" id="collapseExample">
                        <p class="cast">
                        <strong>Protagonizada por: </strong> <span lang="en">Ben Affleck, Gal Gadot, Henry Cavill</span><br />
                        <strong>Director: </strong> <span lang="en">Zack Snyder</span><br />
                        <strong>Género: </strong>Comic, Aventuras, Acción </p>
                    </div>
                    <a role="button" class="btn btn-link btn-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Leer más <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <div class="container container-title">
            <h2 class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> Fecha</h2>
        </div>

        <!-- Fecha -->
        <div class="container listado">
            <label for="date" class="sr-only">Seleccionar fecha</label>
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

        <div class="resultados-visibles">
            <div class="nav nav-pills nav-justified" id="myTab" role="navigation">
                <a role="button" class="nav-item nav-link active" id="horario" data-toggle="tab" href="#horarios" role="tab" aria-controls="horario" aria-selected="true">Ordenar por<br />horario</a>
                <a role="button" class="nav-item nav-link" id="cercania" data-toggle="tab" href="#cercanias" role="tab" aria-controls="cercania" aria-selected="false">Ordenar por<br />cercanía</a>
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

                <div class="tab-pane fade" id="cercanias" role="tabpanel" aria-labelledby="cercania">
                    <div class="buscador">
                        <div class="input-group">
                            <label for="theatresearch" class="sr-only">Buscar por cine desde</label>
                            <span class="input-group-addon" id="sizing-addon1" aria-hidden="true">Desde</span>
                            <input id="theatresearch" type="text" class="form-control" placeholder="Tu ubicación" aria-label="Tu ubicación">
                        </div>
                    </div>

                    <div class="map" id="mapid" aria-label="mapa"></div>

                    <div class="container listado">
                        <h2 class="founded-title">
                            <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i> ¡Encontramos <strong>4</strong> cines cercanos!
                        </h2>
                        <hr aria-hidden="true">
                        <div class="resultados">
                            <a href="seleccionar-horario.html" class="media" aria-label="Hoyts Abasto. Avenida Corrientes 3247, CABA. A 1,2 kilómetros">
                                <img class="mr-3" src="img/logo-hoyts.jpg" alt="Hoyts Abasto" aria-hidden="true">
                                <div class="media-body" aria-hidden="true">
                                    <h3 class="mt-0">Hoyts Abasto</h3>
                                    <p>Av. Corrientes 3247, CABA</p>
                                    <span class="badge badge-secondary near">1,2Km</span>
                                </div>
                            </a>
                            <a href="seleccionar-horario.html" class="media" aria-label="Cinemark Caballito. Avenida La Plata 80, CABA. A 1,2 kilómetros">
                                <img class="mr-3" src="img/logo-cinemark.png" alt="Cinemark Caballito" aria-hidden="true">
                                <div class="media-body" aria-hidden="true">
                                    <h3 class="mt-0">Cinemark Caballito</h3>
                                    <p>Av. La Plata 80, CABA</p>
                                    <span class="badge badge-secondary halfway">1,2km</span>
                                </div>
                            </a>
                            <a href="seleccionar-horario.html" class="media" aria-label="Cinemark Palermo. Antonio Berutti 3399, CABA. A 2,6 kilómetros">
                                <img class="mr-3" src="img/logo-cinemark.png" alt="Cinemark Palermo" aria-hidden="true">
                                <div class="media-body" aria-hidden="true">
                                    <h3 class="mt-0"></h3>
                                    <p>Antonio Berutti 3399, CABA</p>
                                    <span class="badge badge-secondary halfway">2,6km</span>
                                </div>
                            </a>
                            <a href="seleccionar-horario.html" class="media" aria-label="Villages Cines Caballito. Avenida Rivadavia 5071, CABA. A 4 kilómetros">
                                <img class="mr-3" src="img/logo-village.png" alt="Village Cines Caballito" aria-hidden="true">
                                <div class="media-body" aria-hidden="true">
                                    <h3 class="mt-0">Campo de polo</h3>
                                    <p>Av. Rivadavia 5071, CABA</p>
                                    <span class="badge badge-secondary far">4km</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/locales/bootstrap-datepicker.es.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

    <script type="text/javascript">

        $('.resultados-visibles').css('opacity', '0.3');

        $(".listado select").focusout(function() {
            $('.resultados-visibles').css('opacity', '1');
        });

        $('.btn-collapse').click(function(){
            var $this = $(this);
            $this.toggleClass('btn-collapse');
            if($this.hasClass('btn-collapse')){
                $this.html('Leer más <i class="fa fa-angle-down" aria-hidden="true"></i>');
            } else {
                $this.html('Leer menos <i class="fa fa-angle-up" aria-hidden="true"></i>');
            }
        });

        $('a[href="#cercanias"]').on('shown.bs.tab', function (e) {
            var mymap = L.map('mapid').setView([-34.601397, -58.417764], 13.2);

            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
                maxZoom: 18,
                id: 'mapbox.streets',
                accessToken: 'sk.eyJ1IjoibWFydGlubWFzaWduYW5vIiwiYSI6ImNqYXMyZW51YTFmdDcycW1pb2IyODN1ZmkifQ.ig9w6GjZmBq_y2Me83yfog'
            }).addTo(mymap);

        	var LeafIcon = L.Icon.extend({
        		options: {
        			iconSize:     [15, 27],
        			iconAnchor:   [0, 27],
        			popupAnchor:  [-3, -27]
        		}
        	});

            var blueIcon = new LeafIcon({iconUrl: 'img/pin-blue.png'}),
        		redIcon = new LeafIcon({iconUrl: 'img/pin-red.png'}),
                hereIcon = new LeafIcon({iconUrl: 'img/pin-man.png'});

        	L.marker([-34.601397, -58.417764], {icon: hereIcon, alt: 'Estoy aquí.'}).bindPopup("Estoy aquí.").openPopup().addTo(mymap);
        	L.marker([-34.603188, -58.410863], {icon: redIcon, alt: 'Hoyts Abasto.'}).bindPopup("Hoyts Abasto. <br> Av. Corrientes 3247. CABA").openPopup().addTo(mymap);
        	L.marker([-34.616099, -58.428778], {icon: blueIcon, alt: 'Cinemark Caballito.'}).bindPopup("Cinemark Caballito. <br> Av. La Plata 80. CABA").openPopup().addTo(mymap);
        	L.marker([-34.586177, -58.410333], {icon: blueIcon, alt: 'Cinemark Palermo.'}).bindPopup("Cinemark Palermo. <br> Antonio Beruti 3399. CABA").openPopup().addTo(mymap);
        	L.marker([-34.618137, -58.437518], {icon: blueIcon, alt: 'Village Cines Caballito.'}).bindPopup("Village Cines Caballito. <br> Avenida Rivadavia 5071. CABA").openPopup().addTo(mymap);
        })
    </script>
</body>
</html>
