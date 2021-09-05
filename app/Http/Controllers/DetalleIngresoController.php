<?php

namespace App\Http\Controllers;

use App\detalle_ingreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Detalle_ingreso::all();
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
        $detalle_ingreso = new Detalle_ingreso();
        $detalle_ingreso->cantidad = $request->cantidad;
        $detalle_ingreso->precio = $request->precio;
        $detalle_ingreso->articulo_id = $request->articulo_id;
        $detalle_ingreso->ingreso_id = $request->ingreso_id;
            
        $detalle_ingreso->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Detalle_ingreso::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(detalle_ingreso $detalle_ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detalle_ingreso=Detalle_ingreso::findOrFail($id);

        $detalle_ingreso->cantidad = $request->cantidad;
        $detalle_ingreso->precio = $request->precio;
        $detalle_ingreso->articulo_id = $request->articulo_id;
        $detalle_ingreso->ingreso_id = $request->ingreso_id;
            
        $detalle_ingreso->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\detalle_ingreso  $detalle_ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Detalle_ingreso::destroy($id);
    }
}
