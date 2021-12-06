<h1>{{ $titulo }}</h1>
<table>
   <thead>
      <tr>
         <th>Id</th>
         <th>IdUsuario</th>
         <th>IdEvento</th>
         <th>FechaCompra</th>
         <th>Cantidad</th>
      </tr>
   </thead>
      <tbody>
         @foreach ($tickets as $ticket)
            <tr>
               <td>{{ $ticket->idTicket }}</td>
               <td>{{ $ticket->idUsuario }}</td>
               <td>{{ $ticket->idEvento }}</td>
               <td>{{ $ticket->fechaCompra }}</td>
               <td>{{ $ticket->cantidad }}</td>
            </tr>
         @endforeach
      </tbody>
</table>
<br>
<br>