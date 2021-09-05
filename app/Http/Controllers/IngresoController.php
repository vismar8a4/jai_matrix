<?php

namespace App\Http\Controllers;

use App\ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Ingreso::all();
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
        $ingreso = new Ingreso();
        $ingreso->tipo_comprovante = $request->tipo_comprovante;
        $ingreso->serie_comprovante = $request->serie_comprovante;
        $ingreso->numero_comprovante = $request->numero_comprovante;
        $ingreso->impuesto = $request->impuesto;
        $ingreso->total = $request->total;
        $ingreso->estado = $request->estado;
        $ingreso->persona_id = $request->persona_id;
        $ingreso->usuario_id = $request->usuario_id;

        $ingreso->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Ingreso::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function edit(ingreso $ingreso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ingreso=Ingreso::findOrFail($id);

        $ingreso->tipo_comprovante = $request->tipo_comprovante;
        $ingreso->serie_comprovante = $request->serie_comprovante;
        $ingreso->numero_comprovante = $request->numero_comprovante;
        $ingreso->impuesto = $request->impuesto;
        $ingreso->total = $request->total;
        $ingreso->estado = $request->estado;
        $ingreso->persona_id = $request->persona_id;
        $ingreso->usuario_id = $request->usuario_id;

        $ingreso->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ingreso  $ingreso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Ingreso::destroy($id);
    }
}
