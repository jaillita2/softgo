<?php

namespace App\Http\Controllers;

use App\Models\documentacionPropuesta;
use Illuminate\Http\Request;

class DocumentacionPropuestaController extends Controller
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
        return view('DocumentacionPropuesta.createPropuesta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosP = request()->except('_token');

        if($request->hasfile('DOC_P')){
            $datosP['DOC_P']=$request->file('DOC_P')->store('uploads','public');
        }
        documentacionPropuesta::insert($datosP);
        return response()->json($datosP); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documentacionPropuesta  $documentacionPropuesta
     * @return \Illuminate\Http\Response
     */
    public function show(documentacionPropuesta $documentacionPropuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documentacionPropuesta  $documentacionPropuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(documentacionPropuesta $documentacionPropuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\documentacionPropuesta  $documentacionPropuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documentacionPropuesta $documentacionPropuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documentacionPropuesta  $documentacionPropuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(documentacionPropuesta $documentacionPropuesta)
    {
        //
    }
}
