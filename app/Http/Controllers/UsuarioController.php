<?php

namespace App\Http\Controllers;

use App\usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
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
        $usuario = new Usuario();        
        $usuario->nombre = $request->nombre;
        $usuario->tipo_documento = $request->tipo_documento;
        $usuario->numero_documento = $request->numero_documento;
        $usuario->dioreccion = $request->dioreccion;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        $usuario->celular = $request->celular;
        $usuario->email= $request->email;
        $usuario->estado = $request->estado;
        $usuario->rol_id = $request->rol_id;

        $usuario->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Usuario::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id); 

        $usuario->nombre = $request->nombre;
        $usuario->tipo_documento = $request->tipo_documento;
        $usuario->numero_documento = $request->numero_documento;
        $usuario->dioreccion = $request->dioreccion;
        $usuario->telefono = $request->telefono;
        $usuario->direccion = $request->direccion;
        $usuario->celular = $request->celular;
        $usuario->email= $request->email;
        $usuario->estado = $request->estado;
        $usuario->rol_id = $request->rol_id;

        $usuario->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Usuario::destroy($id);
    }
}
