<?php

namespace App\Http\Controllers;

use App\Models\Pliego;
use Illuminate\Http\Request;

class PliegoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pliego.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pliego.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosPliego = request()->all();
        $datosPliego = request()->except('_token');
        Pliego::insert($datosPliego);
        return response()->json($datosPliego);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pliego  $pliego
     * @return \Illuminate\Http\Response
     */
    public function show(Pliego $pliego)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pliego  $pliego
     * @return \Illuminate\Http\Response
     */
    public function edit(Pliego $pliego)
    {
        return view('pliego.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pliego  $pliego
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pliego $pliego)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pliego  $pliego
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pliego $pliego)
    {
        //
    }
}
