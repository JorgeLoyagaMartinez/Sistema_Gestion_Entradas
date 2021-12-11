<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
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
        
        $usuarios = Usuario::get();
        //tickets por usuario: calcular cantidad y listarlos
        $tickets = DB::select("SELECT SUM(cantidad) FROM tickets");

        $parametro = [
            'usuarios' => $usuarios,
            //'cantidadEventos' => $cantidadEventos,
        ];
        return view('usuarios.usuarios', $tickets);
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
        //Validación de datos del formulario
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'mail' => ['required', 'email'],
            'password' => ['required', 'min:6'],
            'password_confirmation' => 'confirmed'
        ], [
            'password_confirmation.confirmed' => 'Las contraseñas ingresadas no coinciden'
        ]);

        //Enviar los datos 
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
