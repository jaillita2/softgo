<?php

namespace App\Http\Controllers;

use App\Models\especificaciones;
use Illuminate\Http\Request;

class EspecificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register.createSpecs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosEsp = request()->except('_token');
        especificaciones::insert($datosEsp);
        return response()->json($datosEsp);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\especificaciones  $especificaciones
     * @return \Illuminate\Http\Response
     */
    public function show(especificaciones $especificaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\especificaciones  $especificaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(especificaciones $especificaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\especificaciones  $especificaciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, especificaciones $especificaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\especificaciones  $especificaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(especificaciones $especificaciones)
    {
        //
    }
}
