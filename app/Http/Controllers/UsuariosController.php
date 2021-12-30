<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nombre = $request->get('nombre');

        if($request->has('nombre')){
            $usuarios = Usuario::where('nombre','like','%'.$nombre.'%')->get();
        } else {
            $usuarios = Usuario::get();
        }

        $parametro = [
            'evento' => $usuarios,
            'nombre' => $nombre
        ];

        return view('inicio', $parametro);
    }

    public function Listado(Request $request)
    {
        $nombre = $request->get('nombre');

        if($request->has('nombre')){
            $usuarios = Usuario::where('nombre','ñike','%'.$nombre.'%')->get();
        } else {
            $usuarios = Usuario::get();
        }

        $parametro = [
            'usuarios' => $usuarios,
            'nombre' => $nombre
        ];

        return view('tus-usuarios',$parametro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usuario::create([
            'nombre' => $request->get('nombre'),
            'apeliido' => $request->get('apellido'),
            'mail' => $request->get('mail'),
            'telefono' => $request->get('telefono'),
            'password' => $request->get('password'),
            'pais' => $request->get('pais'),
            'direccion' => $request->get('direccion'),
            'ciudad' => $request->get('ciudad'),
            'provincia' => $request->get('provincia'),
            'codigo-postal' => $request->get('codigo-postal'),
        ]);

        return redirect()->route('eticket');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario::finOrFall($id);

        return view('detalle', ['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        return view('usuario.edit', ['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Usuario $usuario)
    {
        $usuario->update([
            'nombre' => request('nombre'),
            'apeliido' => request('apellido'),
            'mail' => request('mail'),
            'telefono' => request('telefono'),
            'password' => request('password'),
            'pais' => request('pais'),
            'direccion' => request('direccion'),
            'ciudad' => request('ciudad'),
            'provincia' => request('provincia'),
            'codigo-postal' => request('codigo-postal'),
        ]);

        return redirect()->route('usuarios.show', $usuario);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.usuarios');
    }
}
