<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    //Listado de eventos
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');

        
        if ($request->has('nombre')){
            //$busqueda = 'Resultados para: '.$nombre;
            $eventos = Event::where('nombre', 'like', '%'.$nombre.'%')->get();
        } else {
            //$busqueda = 'Todos los eventos';
            $eventos = Event::get();
        }

        $parametro = [
            'eventos' => $eventos,
            'nombre' => $nombre
        ];

        return view('eventos.eventos', $parametro);
    }

    //Formulario de creación de un nuevo evento 
    public function create()
    {
        return view('eventos.create');
    }

    //Guardar el evento nuevo en la DB
    public function store(Request $request)
    {
    
        Event::create([
            'nombre' => $request->get('nombre'),
            'descripcion' => $request->get('descripcion'),
            'portada' => $request->get('portada'),
            'fecha' => $request->get('fecha'),
            'lugar' => $request->get('lugar'),
            'horario' => $request->get('horario'),
            'precio' => $request->get('precio'),
            'stock' => $request->get('stock'),
            'estado' => $request->get('estado')
        ]);

        return redirect()->route('eventos.eventos');
            
    }

    //Mostrar un evento en específico
    public function show($id)
    {
        $evento = Event::findOrFail($id);

        return view('eventos.show', ['evento'=>$evento]);
    }

    //Formulario de edición de un evento
    public function edit(Event $evento)
    {
        return view('eventos.edit', ['evento'=>$evento]);
    }

    //Actualizar la DB con los nuevos datos del evento
    public function update(Event $evento)
    {
       $evento->update([
        'nombre' => request('nombre'),
        'descripcion' => request('descripcion'),
        'portada' => request('portada'),
        'fecha' => request('fecha'),
        'lugar' => request('lugar'),
        'horario' => request('horario'),
        'precio' => request('precio'),
        'stock' => request('stock'),
        'estado' => request('estado')
       ]);

       return redirect()->route('eventos.show', $evento);
    }

    //Eliminar un evento por su id
    public function destroy(Event $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.eventos');
    }
}