<h1>{{$evento->nombre}}</h1>
<p>{{ $evento->descripcion}}</p>
<h3>{{ $evento->precio}}</h3>
<a href="{{ route('eventos.edit', $evento)}}">Editar</a>

<form action="{{ route('eventos.destroy', $evento)}}" method="POST">
    @csrf @method('DELETE')
    <button>Eliminar</button>
</form>