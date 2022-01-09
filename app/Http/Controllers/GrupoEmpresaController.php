<?php

namespace App\Http\Controllers;

use App\Models\grupoEmpresa;
use Illuminate\Http\Request;

use App\Http\Requests\StoreGrupo;

class GrupoEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('grupoEmpresa.createGrupo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupoEmpresa.createGrupo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGrupo $request)
    {
        $datosG = request()->except('_token');
        grupoEmpresa::insert($datosG);
        session()-> flash('exito', 'Nombre de Grupo-Empresa registrado');
       return redirect('Propuesta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\grupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function show(grupoEmpresa $grupoEmpresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\grupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function edit(grupoEmpresa $grupoEmpresa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\grupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, grupoEmpresa $grupoEmpresa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\grupoEmpresa  $grupoEmpresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(grupoEmpresa $grupoEmpresa)
    {
        //
    }
}
