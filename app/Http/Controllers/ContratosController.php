<?php

namespace App\Http\Controllers;

use App\Models\contratos;
use Illuminate\Http\Request;

class contratosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Emitir_Contrato.createcontratos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Emitir_Contrato.createcontratos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'TITULO_CONTRATOS'=> 'required'
        ]);

        $datosContratos = request()->except('_token');

        if($request->hash_file('DOC_CONTRATOS')){
            $datosContratos['DOC_CONTRATOS']=$request->file('DOC_CONTRATOS')->store('uploads','public');
        }
        contratos::insert($datosContratos);
        session()-> flash('exito', 'Contrato emitido con exito');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function show(contratos $contratos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function edit(contratos $contratos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contratos $contratos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contratos  $contratos
     * @return \Illuminate\Http\Response
     */
    public function destroy(contratos $contratos)
    {
        //
    }
}
