@extends('layout')

@section('title', 'Administrador')

@section('content')

    <h1>Administrador</h1>

    {{var_dump($tickets)}}
     <table>
        <thead>
           <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Mail</th>
              <th>Tickets comprados</th>
              <th>Listado de eventos</th>
           </tr>
        </thead>
           {{-- <tbody>
              @foreach ($usuarios as $usuario)
                 <tr>
                    <td>{{ $usuario->nombre }}</td>
                    <td>{{ $usuario->apellido }}</td>
                    <td>{{ $usuario->mail }}</td>
                    {{-- <td>{{ $usuario-> }}</td>
                    <td>{{ $usuario->}}</td> --}
                 </tr>
              @endforeach
           </tbody> --}}
     </table>

@endsection