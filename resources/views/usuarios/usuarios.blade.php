{{-- <h1>{{ $titulo }}</h1> --}}
<form method="get" action={{ route("usuarios.index")}}>
   @csrf
   <label>idUsuario: </label> <input type="text" name="idUsuario"><br>
   <label>dni: </label> <input type="text" name="dni"><br>
   <button type="submit">Filtrar</button>
</form>
<table>
   <thead>
      <tr>
         <th>Id</th>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>DNI</th>
         <th>Mail</th>
         <th>Password</th>
      </tr>
   </thead>
      {{-- <tbody>
         @foreach ($usuarios as $usuario)
            <tr>
               <td>{{ $usuario->idUsuario }}</td>
               <td>{{ $usuario->nombre }}</td>
               <td>{{ $usuario->apellido }}</td>
               <td>{{ $usuario->dni }}</td>
               <td>{{ $usuario->mail }}</td>
               <td>{{ $usuario->password }}</td>
            </tr>
         @endforeach
      </tbody> --}}
</table>
<br>
<br>

