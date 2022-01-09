<?php

namespace App\Http\Controllers;

use App\Models\reportes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('grupo_empresas')
        ->join('documentacion_propuestas', 'grupo_empresas.NAME_EMP', '=', 'documentacion_propuestas.NAME_P')
        ->get();
        return view('ReportesPropuestas.createRepor_propuesta', ['empresas'=>$query]);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ReportesPropuestas.createRepor_propuesta');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reportes  $reportes 
     * @return \Illuminate\Http\Response
     */
    public function show(reportes  $reportes )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reportes  $reportes 
     * @return \Illuminate\Http\Response
     */
    public function edit(reportes  $reportes )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reportes  $reportes 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reportes  $reportes )
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reportes  $reportes 
     * @return \Illuminate\Http\Response
     */
    public function destroy(reportes  $reportes )
    {
        //
    }
}