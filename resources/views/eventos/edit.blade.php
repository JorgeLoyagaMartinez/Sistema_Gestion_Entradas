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
    <h2>Editar evento</h2>


    <section>
        
        <form class="row g-3" action="{{ route('eventos.update', $evento)}}" method="POST">
            @csrf @method('PUT')
            <div class="col-md-12">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name='nombre' value={{ old('nombre', $evento->nombre) }}>
            </div>
            <div class="col-md-12">
              <label for="descripcion" class="form-label">Descripción</label>
              <textarea class="form-control" id="descripcion" name='descripcion'>{{ old('descripcion', $evento->descripcion) }}</textarea>
            </div>
            <div class="col-12">
              <label for="portada" class="form-label">Imagen de portada</label>
              <input type="text" class="form-control" id="portada" name='portada' value={{ old('portada', $evento->portada) }}>
            </div>
            <div class="col-12">
              <label for="lugar" class="form-label">Lugar</label>
              <input type="text" class="form-control" id="lugar" name='lugar' value={{ old('lugar', $evento->lugar) }}>
            </div>
            <div class="col-6">
              <label for="fecha" class="form-label">Fecha</label>
              <input type="date" class="form-control" id="fecha" name='fecha' value={{ old('fecha', $evento->fecha) }}>
            </div>
            <div class="col-md-6">
                <label for="horario" class="form-label">Hora</label>
                <select id="horario" class="form-select" name='horario'>
                  <option selected>{{ old('hora', $evento->hora) }}</option>
                  <option value='20:00'>20:00 hs</option>
                  <option value='20:30'>20:30 hs</option>
                  <option value='21:00'>21:00 hs</option>
                </select>
              </div>
            <div class="col-md-6">
              {{-- falta agregar categoria a la DB --}}
              <label for="categoria" class="form-label">Categoría</label>
              <select id="categoria" class="form-select" name='categoria' >
                <option selected></option>
                <option value='pop'>Pop</option>
                <option value='rock'>Rock</option>
                <option value='trap'>Trap</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="stock" class="form-label">Stock</label>
              <input type="number" class="form-control" id="stock" name="stock" value={{ old('stock', $evento->stock) }}>
            </div>
            <div class="col-md-4">
                <label for="estado" class="form-label">Estado</label>
                <select id="estado" class="form-select" name='estado' >
                  <option selected>{{ old('estado', $evento->descripcion) }}</option>
                  <option value='en venta'>En venta</option>
                  <option value='cancelado'>Cancelado</option>
                  <option value='finalizado'>Finalizado</option>
                </select>
            </div>
            <div class="col-md-4 input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="number" class="form-control" aria-label="precio" name='precio' value={{ old('precio', $evento->precio) }}>
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
          </form>
    </section>
</body>
</html>