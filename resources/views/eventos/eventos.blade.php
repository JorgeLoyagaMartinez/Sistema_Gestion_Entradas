<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.3.0/css/mdb.min.css'>
    <title>Document</title>
</head>
<body class="container my-4">
    <h1>Gestión de eventos</h1>
    <h2>Búsqueda de eventos</h2>
    <h3>{{ $titulo }}</h3>

    <a href='{{ route('eventos.create')}}'>Crear Evento</a>

    <form action="{{ route('eventos.index')}}" method="GET">
        <input type="text" class="form-control" id="nombre" aria-describedby="search" name='nombre'>
        <button type="submit" class="btn btn-primary">Buscar</button>
    </form>

    <section class="d-flex flex-wrap m-2">
        @foreach ($eventos as $evento)
            <div class="card m-2" style="width: 18rem;">
                <img src={{ $evento->portada}} class="card-img-top" alt={{ $evento->nombre }}>
                <div class="card-body">
                    <h5 class="card-title">{{ $evento->nombre }}</h5>
                    <p class="card-text">{{ $evento->descripcion }}</p>
                    <a href="{{ route('eventos.show', $evento)}}" class="btn btn-primary">Ver más</a>
                </div>
            </div>
        @endforeach
       
    </section>

    
</body>
</html>