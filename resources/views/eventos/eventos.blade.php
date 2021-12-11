@extends('layout')

@section('title', 'Eventos')

@section('content')
    <h1>Gestión de eventos</h1>
        <h2>Búsqueda de eventos</h2>
        @if (!$nombre)
            <h3>{{ 'Resultados para ' . $nombre}}</h3>
        @else 
            <h3>Todos los eventos</h3>
        @endif

        <a href='{{ route('eventos.create')}}'>Crear Evento</a>

        <form action="{{ route('eventos.index')}}" method="GET">
            <input type="text" class="form-control" id="nombre" aria-describedby="search" name='nombre'>
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <section class="d-flex flex-wrap m-2">
            @forelse ($eventos as $evento)
                <div class="card m-2" style="width: 18rem;">
                    <img src={{ $evento->portada}} class="card-img-top" alt={{ $evento->nombre }}>
                    <div class="card-body">
                        <h5 class="card-title">{{ $evento->nombre }}</h5>
                        <p class="card-text">{{ $evento->descripcion }}</p>
                        <a href="{{ route('eventos.show', $evento)}}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
                @empty
                <p>No hay resultados para la búsqueda</p>
            @endforelse
        
        </section>
@endsection