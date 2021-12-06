<h1>{{ $titulo }}</h1>
<table>
   <thead>
      <tr>
         <th>Id</th>
         <th>Fecha</th>
         <th>Lugar</th>
         <th>Horario</th>
         <th>Precio</th>
         <th>CantidadEntradas</th>
         <th>Estado</th>>
         <th>Descripcion</th>
         <th>Portada</th>
      </tr>
   </thead>
      <tbody>
         @foreach ($eventos as $evento)
            <tr>
               <td>{{ $evento->idEvento }}</td>
               <td>{{ $evento->fecha }}</td>
               <td>{{ $evento->lugar }}</td>
               <td>{{ $evento->horario }}</td>
               <td>{{ $evento->precio }}</td>
               <td>{{ $evento->cantidadEntradas }}</td>
               <td>{{ $evento->estado }}</td>
               <td>{{ $evento->descripcion }}</td>>
               <td>{{ $evento->portada }}</td>
            </tr>
         @endforeach
      </tbody>
</table>
<br>
<br>