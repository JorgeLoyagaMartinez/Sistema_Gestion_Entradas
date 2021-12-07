<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventoController extends Controller
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
            $busqueda = 'Resultados para: '.$nombre;
            // $eventos = DB::table('eventos')
            //             ->select('*')
            //             ->where('nombre', 'like', '%'.$nombre.'%')
            //             ->get();
            $eventos = Event::where('nombre', 'like', '%'.$nombre.'%')->get();
        } else {
            $busqueda = 'Todos los eventos';
            // $eventos = DB::table('eventos')
            //             ->select('*')
            //             ->get();
            $eventos = Event::get();
        }

        $parametro = [
            'eventos' => $eventos,
            'titulo' => $busqueda
        ];

        return view('eventos.eventos', $parametro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        // foreach($evento as $clave => $valor) {
        //     DB::insert($clave, $valor);            
        // }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evento = Event::findOrFail($id);

        return view('eventos.show', ['evento'=>$evento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
