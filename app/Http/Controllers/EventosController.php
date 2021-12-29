<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');

        if ($request->has('nombre')){
            //$busqueda = 'Resultados para: '.$nombre;
            $eventos = Evento::where('nombre', 'like', '%'.$nombre.'%')->get();
        } else {
            //$busqueda = 'Todos los eventos';
            $eventos = Evento::get();
        }
        $eventoDestacado = Evento::where('destacado', "=", 1)->get();
        if(!$eventoDestacado->isEmpty()) {
            $dest = $eventoDestacado[0];
        } else {
            $dest = $eventos[0];
        }
        $eventosDestacadosDos = Evento::orderBy('fecha', 'desc')->take(2)->get();
        
        $parametro = [
            'eventos' => $eventos,
            'nombre' => $nombre,
            'destacado' => $dest,
            "destacadosAbajo" => $eventosDestacadosDos
        ];

        return view('inicio', $parametro);

    }

    public function Listado(Request $request)
    {
        $nombre = $request->get('nombre');



        if ($request->has('nombre')){
            //$busqueda = 'Resultados para: '.$nombre;
            $eventos = Evento::where('nombre', 'like', '%'.$nombre.'%')->get();
        } else {
            //$busqueda = 'Todos los eventos';
            $eventos = Evento::get();
        }



        $parametro = [
            'eventos' => $eventos,
            'nombre' => $nombre
        ];

        return view('tus-eventos', $parametro);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crear-evento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Evento::create([
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

        return redirect()->route('admin');
        // return request();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Evento::findOrFail($id);

        return view('detalle', ['evento'=>$evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        return view('editar-evento', ['evento'=>$evento]);
    }


    public function categoryFilter($categoria)
    {
        $eventos = Evento::where('categoria', '=', $categoria)->get();
        return view('categorias-filtradas', ['eventos'=>$eventos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Evento $evento)
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
        //    return request();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('eventos.eventos');
    }
}
