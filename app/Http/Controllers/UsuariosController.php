<?php

namespace App\Http\Controllers;

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

        $idUsuario = $request->get("idUsuario");
        $dni = $request->get("dni");
        //devuelve array de objetos iguales a la base datos que pedi
        /*$usuarios = DB::select("SELECT * FROM usuario");
        */

        $usuarios = DB::table("usuario")
                        ->select("*")
                        ->where("idUsuario","like","%".$idUsuario."%")
                        ->Where("dni","like", $dni."%")
                        ->get();
        $parametro = [
            "usuarios" => $usuarios,
            "titulo" => "Esto es la tabla completa de Usuarios"
        ];
        return view('usuarios.usuarios', $parametro);
        //return $idUsuario;
        //return "Esto es el index del UsusarioController";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return "Este es el metodo show del  UsuarioController y es el id: ".$id;
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
