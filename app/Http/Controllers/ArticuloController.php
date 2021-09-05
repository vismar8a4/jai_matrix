<?php

namespace App\Http\Controllers;

use App\articulo;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Articulo::all();
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
        $articulo = new Articulo();
        $articulo->codigo= $request->codigo;
        $articulo->nombre= $request->nombre;
        $articulo->precio_venta= $request->precio_venta;
        $articulo->stock= $request->stock;
        $articulo->descripcion= $request->descripcion;
        $articulo->imagen= $request->imagen;
        $articulo->estado= $request->estado;
        $articulo->categoria_id= $request->categoria_id;

        $articulo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Articulo::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit(articulo $articulo)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $articulo=Articulo::findOrFail($id);

        $articulo->codigo= $request->codigo;
        $articulo->nombre= $request->nombre;
        $articulo->precio_venta= $request->precio_venta;
        $articulo->stock= $request->stock;
        $articulo->descripcion= $request->descripcion;
        $articulo->imagen= $request->imagen;
        $articulo->estado= $request->estado;
        $articulo->categoria_id= $request->categoria_id;

        $articulo->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Articulo::destroy($id);
    }
}
