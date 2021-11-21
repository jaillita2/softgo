<?php

namespace App\Http\Controllers;

use app\Models\L_especificaciones;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



use App\Http\Requests\StoreL_Especificacion;




class L_especificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query= DB::table('especificaciones')
        ->get();
        return view('L_especificaciones.createL_especificaciones',['listado'=>$query]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('L_especificaciones.createL_especificaciones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('L_especificaciones.createL_especificaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\L_especificaciones  $L_especificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(L_especificaciones $L_especificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\L_especificaciones  $L_especificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(L_especificaciones $L_especificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L_especificaciones  $L_especificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L_especificaciones $L_especificaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L_especificaciones $L_especificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(L_especificaciones $L_especificaciones)
    {
        //
    }
}
