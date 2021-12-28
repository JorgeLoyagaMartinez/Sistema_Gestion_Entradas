@extends('layout')

@section('title', 'Eventos')

@section('content')
   
       
    {{-- <h3>{{ $evento->categoria }}</h3> --}}

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