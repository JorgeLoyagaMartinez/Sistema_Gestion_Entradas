@extends('layout')
@section('title', 'Pago | Fascket')

@section('content')
<body>
    <nav class="navbar sticky-top navbar-dark bg-primary">

        <a role="button" class="btn-back" href="#" onclick="window.history.go(-1); return false;" aria-label="Volver">
            <i class="fa fa-angle-left fa-2x" aria-hidden="true"></i>
        </a>

        <h1 class="navbar-brand">Seleccionar medio de pago</h1>

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
        <div class="checkout">
            <div class="listado">
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-film" aria-hidden="true"></i>
                            <span class="sr-only">Película: </span>
                        </div>
                        <div class="col-11">
                            <h2>La liga de la justicia</h2>
                            <small>Subtitulada 2D</small>
                        </div>
                    </div>
                </div>
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span class="sr-only">Cine: </span>
                        </div>
                        <div class="col-11">
                            <h2>Hoyts Abasto</h2>
                            <small>Av. Corrientes 3247, CABA</small>
                        </div>
                    </div>
                </div>
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-calendar" aria-hidden="true"></i>
                            <span class="sr-only">Fecha: </span>
                        </div>
                        <div class="col-5">
                            <div class="fecha">
                                sábado 20/11
                            </div>
                        </div>
                        <div class="col-1">
                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                            <span class="sr-only">Horario: </span>
                        </div>
                        <div class="col-5">
                            <div class="horario">
                                21:15
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container detalle-seleccion">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-braille" aria-hidden="true"></i>
                        </div>
                        <div class="col-11">
                            4 y 5. Fila G. Sala 2
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tarjeta de beneficios -->
            <div class="container container-title">
                <label for="inputState">
                    <div class="row">
                        <div class="col-1">
                            <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        </div>
                        <div class="col-11">
                            <h3>Tarjeta de beneficios</h3>
                        </div>
                    </div>
                </label>
            </div>

            <div class="container listado">
                <select id="inputState" class="form-control">
                    <option selected aria-label="Club la Nación 2 por 1">Club La Nación 2x1</option>
                    <option aria-label="Clarin tres seis cinco 2 por 1">Clarin 365 2x1</option>
                    <option aria-label="Club Personal 2 por 1">Club Personal 2x1</option>
                    <option aria-label="Cablevisión Clientes 2 por 1">Cablevisión Clientes 2x1</option>
                </select>
            </div>

            <div class="container listado">
                <label for="InputName">Número de Tarjeta de Beneficios</label>
                <div class="input-group">
                    <input type="number" class="form-control" placeholder="Ej.: 1234 5678 9012 3456" aria-label="Ej.: 1234 5678 9012 3456" aria-describedby="basic-addon2">
                </div>
            </div>

            <!-- Valor de las entradas -->
            <div class="container container-title">
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-ticket" aria-hidden="true"></i>
                    </div>
                    <div class="col-11">
                        <h3>Valor de cada entrada</h3>
                    </div>
                </div>
            </div>

            <!-- Valor con o sin beneficio -->
            <div class="container listado">
                <div class="row">
                    <div class="col-9">
                        <span aria-label="Con Club La Nación 2 por 1">Con Club La Nación 2x1</span>
                    </div>
                    <div class="col-3 text-right">
                        <strong class="precio" aria-label="80 pesos">$80</strong>
                    </div>
                </div>
            </div>

            <!-- Medios de pago-->
            <div class="container container-title">
                <div class="row">
                    <div class="col-1">
                        <i class="fa fa-usd" aria-hidden="true"></i>
                    </div>
                    <div class="col-11">
                        <h3>Medios de pago</h3>
                    </div>
                </div>
            </div>

            <div class="listado">
                <div class="nav nav-pills nav-justified" id="myTab" role="tablist">
                    <a class="nav-item nav-link active" id="horario" data-toggle="tab" href="#credito" role="tab" aria-controls="credito" aria-selected="true">Tarjeta de Crédito</a>
                    <a class="nav-item nav-link" id="cercania" data-toggle="tab" href="#debito" role="tab" aria-controls="debito" aria-selected="false">Tarjeta de Débito</a>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="credito" role="tabpanel" aria-labelledby="credito">
                        <div class="card-body">
                            <div class="container container-tarjetas">
                                <form class="register">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="InputName">Número de Tarjeta de Crédito</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Ej.: 1234 5678 9012 3456" aria-describedby="basic-addon2">
                                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-inline">
                                            <div class="col form-group">
                                                <div class="row">
                                                    <label for="Code">Código de seguridad</label>
                                                    <input type="number" class="form-control" id="Code" aria-describedby="emailHelp" placeholder="Ej.: 543">
                                                </div>
                                            </div>
                                            <span class="col" data-toggle="tooltip">¿Dónde está el código? últimos 3 o 4 números del dorso de la tarjeta.</span>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"><small>Quiero usar estos datos para futuras compras</small>
                                            </label>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="debito" role="tabpanel" aria-labelledby="debito">
                        <div class="card-body">
                            <div class="container container-tarjetas">
                                <form class="register">
                                    <fieldset>
                                        <div class="form-group">
                                            <label for="InputName">Número de Tarjeta de Débito</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" placeholder="Ej.: 1234 5678 9012 3456" aria-describedby="basic-addon2">
                                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-cc-visa" aria-hidden="true"></i></span>
                                            </div>
                                        </div>

                                        <div class="form-inline">
                                            <div class="col form-group">
                                                <div class="row">
                                                    <label for="Code">Código de seguridad</label>
                                                    <input type="number" class="form-control" id="Code" aria-describedby="emailHelp" placeholder="Ej.: 543">
                                                </div>
                                            </div>
                                            <span class="col" data-toggle="tooltip">¿Dónde está el código? últimos 3 o 4 números del dorso de la tarjeta.</span>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"><small>Quiero usar estos datos para futuras compras</small>
                                            </label>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container container-title">
                <a role="button" href="eticket.html" class="btn btn-primary btn-block">Confirmar compra</a>
                <a role="button" href="#" class="btn btn-outline-primary btn-block" onclick="window.history.go(-1); return false;">Cancelar</a>
            </div>
        </div>

    </main>
</body>
@endsection
