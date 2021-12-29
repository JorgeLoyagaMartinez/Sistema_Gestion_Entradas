@extends('layout')
@section('title', 'Crear Evento | Fascket')

@section('content')

    <h1 id="title-form">Editar evento</h1>

    <div id="section-form">
        <h3 id="subtitle-form">Edicion de eventos</h3>
        <form action="{{ route('eventos.update', ['evento' => $evento]) }}" method="POST" id="crear-evento" autocomplete="off">
            @csrf @method('PUT')
            <div>
              <label for="nombre" id="form-label">Nombre:</label>
              <input type="text" id="form-control" id="nombre" name='nombre' placeholder="Nombre del evento" value={{ old('nombre', $evento->nombre) }}>
            </div>
            <div>
              <label for="descripcion" id="form-label">Descripción:</label>
              <textarea class="form-control" id="descripcion" name='descripcion' placeholder="Descripción del evento"></textarea>
            </div>
            <div >
              <label for="portada" id="form-label">URL de portada:</label>
              <input type="text" id="form-control" id="portada" name='portada' placeholder="URL de la portada">
            </div>
            <div >
              <label for="lugar" id="form-label">Lugar:</label>
              <input type="text" id="form-control" id="lugar" name='lugar' placeholder="Establece un lugar">
            </div>
            <div>
              <label for="fecha" id="form-label">Fecha:</label>
              <input type="date" id="form-control" id="fecha" name='fecha' placeholder="Establece una fecha">
            </div>
            <div>
                <label for="horario" id="form-label">Hora:</label>
                <select id="horario" class="form-select" name='horario'>
                  <option selected>Elige un horario</option>
                  <option value='20:00'>20:00 hs</option>
                  <option value='20:30'>20:30 hs</option>
                  <option value='21:00'>21:00 hs</option>
                </select>
              </div>
            <div>
              <label for="categoria" id="form-label">Categoría:</label>
              <select id="categoria" class="form-select" name='categoria'>
                <option selected>Elige un genero</option>
                <option value='pop'>Pop</option>
                <option value='rock'>Rock</option>
                <option value='trap'>Trap</option>
              </select>
            </div>
            <div>
              <label for="stock" id="form-label">Stock:</label>
              <input type="number" id="form-control" id="stock" name="stock" placeholder="Indicar stock">
            </div>
            <div >
                <label for="estado" id="form-label">Estado:</label>
                <select id="estado" class="form-select" name='estado'>
                  <option selected>Elige un estado</option>
                  <option value='en venta'>En venta</option>
                  <option value='cancelado'>Cancelado</option>
                  <option value='finalizado'>Finalizado</option>
                </select>
            </div>
            <div>
                <label for="estado" id="form-label">Precio:</label>
                <input type="number" id="form-control" aria-label="precio" name='precio' placeholder="Indicar precio">
            </div>
            <div>
              <button type="submit" id="btn-crear">Editar evento</button>
            </div>
          </form>
    </div>

@endsection
