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
        </section>
        <!-- Breadcrumb Section End -->

        <!-- Details Section Begin -->
        <main class="main-details">
            <div class="container-fluid">
                <div class="row">
                    <div class="container event-description breadcrumb__text">
                        <h2 class="my-3" style="color: #a923ca;" id="eventoNombre">{{$evento->nombre}}</h2>

                        <p>
                            {{ $evento->descripcion}}
                        </p>
                        <div style='display: none' id='eventoStock'>{{$evento->stock}}</div>
                        <div style='display: none' id="eventoPortada">{{$evento->imagenes}}</div>
                        <p class="cast">
                            <strong>Categoria: </strong>{{ $evento->categoria}}
                        </p>
                    </div>
                </div>
            </div>

            <div class="hideMessage" id="editarEventoBtn" >
                <a href="{{ route('eventos.edit', $evento)}}" class="site-btn primary-btn my-4 text-light">
                    Editar evento
                </a>
                <form action="{{ route('eventos.destroy', $evento)}}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit" class="site-btn primary-btn my-4 text-light">
                        Eliminar evento
                    </button>
                </form>
            </div>

            <div id="verEvento">

                <div class="title-dates">
                    <h2 class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> Fechas</h2>
                </div>

                <div class="container listado">
                    <select id="inputState" class="form-control">
                        <option selected aria-label="{{ $evento->fecha}}">{{ $evento->fecha}}</option>
                    </select>
                </div>
                <!-- Dates End -->



                <div class="resultados-visibles">

                    <div class="nav nav-pills nav-justified" id="myTab" role="navigation">
                        <button role="button" class="nav-item nav-link active my-4" id="horario" data-toggle="tab" href="#horarios" role="tab" aria-controls="horario" aria-selected="true">
                            Horarios disponibles
                        </button>
                    </div>


                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="horarios" role="tabpanel" aria-labelledby="horario">
                            <div id="accordion" role="tablist">

                                <div class="card">
                                    <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="container container-title">
                                                <h3 class="hora text-dark">{{ $evento->horario}} hs</h3>
                                            </div>
                                            <h3 class="mt-0 text-dark" >{{ $evento->lugar}}</h3>
                                            <p class="my-4" id="eventoPrecio">PRECIO: {{ $evento->precio}} PESOS</p>
                                            <div class="detalleCantidad">
                                                <p>Cantidad: </p>
                                                <input type="text" name="quantity" id="eventoCantidad" placeholder="1" value/>
                                            </div>
                                            <button type="submit" class="site-btn primary-btn" onclick="setCartItems({{$evento->id}})">AGREGAR AL CARRITO</button>
                                        </div>
                                        <div class="onAdd hideMessage">
                                            <a href="{{ route('carrito') }}" class="site-btn primary-btn">VER CARRITO</a>
                                            <a href="{{ route('tus-eventos') }}" class="site-btn primary-btn btn-outline">seguir comprando</a>
                                            <p>Ticket agregado al carrito</p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
        <!-- Details Section End -->
        <script src="{{ URL::asset("js/detalle.js") }}"></script>
        <script>
            window.onload = showView();
        </script>
        @endsection
